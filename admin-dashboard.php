<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: admin-login.html");
    exit();
}

include "php/db.php";

// Dashboard Statistics
$doctorResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM doctors");
$doctorCount = mysqli_fetch_assoc($doctorResult)['total'];

$departmentResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM departments");
$departmentCount = mysqli_fetch_assoc($departmentResult)['total'];

$appointmentResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM appointments");
$appointmentCount = mysqli_fetch_assoc($appointmentResult)['total'];

$messageResult = mysqli_query($conn, "SELECT COUNT(*) AS total FROM contact_messages");
$messageCount = mysqli_fetch_assoc($messageResult)['total'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="top-header">

<div class="container">

<div class="logo-section">

<img src="images/logo.png">

<div class="logo-text">

<h1>Government Hospital</h1>

<p>Admin Dashboard</p>

</div>

</div>

</div>

</div>

<section class="services">

<div class="container">

<div class="section-title">

<h2>Administrator Dashboard</h2>

<p>Welcome, <?php echo $_SESSION['admin']; ?></p>

</div>

<div class="service-container">

<div class="service-card">
<i class="fa-solid fa-user-doctor fa-3x"></i>
<h3><?php echo $doctorCount; ?></h3>
<p>Total Doctors</p>
</div>

<div class="service-card">
<i class="fa-solid fa-hospital fa-3x"></i>
<h3><?php echo $departmentCount; ?></h3>
<p>Departments</p>
</div>

<div class="service-card">
<i class="fa-solid fa-calendar-check fa-3x"></i>
<h3><?php echo $appointmentCount; ?></h3>
<p>Appointments</p>
</div>

<div class="service-card">
<i class="fa-solid fa-envelope fa-3x"></i>
<h3><?php echo $messageCount; ?></h3>
<p>Messages</p>
</div>

</div>

<br><br>

<div class="service-container">

<a href="manage_doctors.php" class="btn blue">
Manage Doctors
</a>

<a href="manage_departments.php" class="btn green">
Manage Departments
</a>

<a href="manage_timings.php" class="btn cyan">
Manage OP Timings
</a>

<a href="manage_appointments.php" class="btn navy">
Appointments
</a>

<a href="manage_messages.php" class="btn blue">
Messages
</a>

<a href="php/logout.php" class="btn red">
Logout
</a>

</div>

</div>

</section>

<footer>

<div class="container">

<p class="copyright">

© 2026 Government Hospital Information System

</p>

</div>

</footer>

</body>

</html>