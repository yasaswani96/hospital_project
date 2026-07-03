<?php

include "db.php";

if(isset($_POST['name']))
{

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO contact_messages
            (name, email, mobile, message)
            VALUES
            ('$name','$email','$mobile','$message')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Message Sent Successfully');
        window.location='../contact.html';
        </script>";
    }
    else
    {
        die('Database Error : '.mysqli_error($conn));
    }

}
else
{
    die('No form data received.');
}

?>