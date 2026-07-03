<?php

session_start();

include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'
        AND role='admin'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $_SESSION['admin'] = $username;

    header("Location: ../admin-dashboard.php");
    exit();

}else{

    echo "<script>
    alert('Invalid Username or Password');
    window.location='../admin-login.html';
    </script>";

}

?>