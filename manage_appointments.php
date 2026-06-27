<<<<<<< HEAD
<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Appointments</h2>

<table>
<tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Mobile</th>
    <th>Doctor</th>
    <th>Date</th>
    <th>Token</th>
    <th>Status</th>
</tr>

<?php

$query=mysqli_query($conn,"SELECT * FROM appointments");

while($row=mysqli_fetch_assoc($query))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['doctor_name']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['token_no']; ?></td>

<td>
<button class="confirm-btn">
Confirmed
</button>
</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>
=======
<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Appointments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Appointments</h2>

<table>
<tr>
    <th>ID</th>
    <th>Patient Name</th>
    <th>Mobile</th>
    <th>Doctor</th>
    <th>Date</th>
    <th>Token</th>
    <th>Status</th>
</tr>

<?php

$query=mysqli_query($conn,"SELECT * FROM appointments");

while($row=mysqli_fetch_assoc($query))
{
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['patient_name']; ?></td>
<td><?php echo $row['mobile']; ?></td>
<td><?php echo $row['doctor_name']; ?></td>
<td><?php echo $row['appointment_date']; ?></td>
<td><?php echo $row['token_no']; ?></td>

<td>
<button class="confirm-btn">
Confirmed
</button>
</td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>
>>>>>>> 2c4d01f9adebee62e3040483ea3380205936278a
