<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role']!="admin"){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">

    <h1>Admin Control Panel</h1>
    <p>Welcome Admin / Doctor</p>

    <div class="menu">
        <a href="manage_doctors.php">Manage Doctors</a>
        <a href="manage_departments.php">Manage Departments</a>
        <a href="manage_timings.php">Manage OPD Timings</a>
        <a href="manage_appointments.php">Confirm Appointments</a>
        <a href="token.php">Token Details</a>
        <a href="logout.php" class="logout">Logout</a>
    </div>

</div>

</body>
</html>