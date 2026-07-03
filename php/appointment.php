<?php

include "db.php";

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$department = $_POST['department'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments
(name, mobile, department, doctor, date, time, status)
VALUES
('$name','$mobile','$department','$doctor','$date','$time','Pending')";

if(mysqli_query($conn, $sql))
{
    echo "<script>
    alert('Appointment Booked Successfully');
    window.location='../appointment.html';
    </script>";
}
else
{
    echo "Database Error : " . mysqli_error($conn);
}

?>