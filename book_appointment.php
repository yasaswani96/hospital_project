<?php
include 'db_connect.php';

$n=$_POST['patient_name'];
$m=$_POST['mobile'];
$d=$_POST['doctor_name'];
$date=$_POST['appointment_date'];

$q=mysqli_query($conn,
"SELECT MAX(token_no) as t FROM appointments");

$row=mysqli_fetch_assoc($q);

$token=$row['t']+1;

mysqli_query($conn,
"INSERT INTO appointments
(patient_name,mobile,doctor_name,appointment_date,token_no)
VALUES
('$n','$m','$d','$date','$token')");

echo "Appointment Success";
echo "<h2>Token: ".$token."</h2>";
?>