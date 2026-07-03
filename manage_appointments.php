<?php
include 'php/db.php';

if(isset($_GET['accept']))
{
    $id = $_GET['accept'];

    mysqli_query($conn,"UPDATE appointments
                        SET status='Accepted'
                        WHERE id='$id'");

    header("Location: manage_appointments.php");
    exit();
}

if(isset($_GET['reject']))
{
    $id = $_GET['reject'];

    mysqli_query($conn,"UPDATE appointments
                        SET status='Rejected'
                        WHERE id='$id'");

    header("Location: manage_appointments.php");
    exit();
}

if(isset($_GET['delete']))
{
    $id=$_GET['delete'];

    mysqli_query($conn,"DELETE FROM appointments
                        WHERE id='$id'");

    header("Location: manage_appointments.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Appointments</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
margin:0;
font-family:Arial;
background:#eef5ff;
}

.admin-header{
background:#1565c0;
color:white;
padding:20px;
display:flex;
justify-content:space-between;
}

.admin-nav{
background:#0d47a1;
}

.admin-nav ul{
display:flex;
list-style:none;
margin:0;
padding:0;
}

.admin-nav li a{
display:block;
padding:15px 25px;
color:white;
text-decoration:none;
}

.admin-nav li a:hover{
background:#1976d2;
}

.container{
width:95%;
margin:30px auto;
}

h2{
text-align:center;
color:#1565c0;
}

table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 5px 20px rgba(0,0,0,.15);
}

th{
background:#1565c0;
color:white;
padding:15px;
}

td{
padding:15px;
text-align:center;
border-bottom:1px solid #ddd;
}

.accept{
background:#28a745;
color:white;
padding:8px 15px;
border-radius:5px;
text-decoration:none;
}

.reject{
background:#ffc107;
color:black;
padding:8px 15px;
border-radius:5px;
text-decoration:none;
}

.delete{
background:#dc3545;
color:white;
padding:8px 15px;
border-radius:5px;
text-decoration:none;
}

footer{
margin-top:40px;
background:#1565c0;
color:white;
text-align:center;
padding:15px;
}

</style>

</head>

<body>

<div class="admin-header">

<h1>Government Hospital Admin</h1>

<div>Welcome Admin</div>

</div>

<div class="admin-nav">

<ul>

<li><a href="admin-dashboard.php">Dashboard</a></li>

<li><a href="manage_doctors.php">Doctors</a></li>

<li><a href="manage_departments.php">Departments</a></li>

<li><a href="manage_timings.php">Timings</a></li>

<li><a href="manage_appointments.php">Appointments</a></li>

<li><a href="manage_messages.php">Messages</a></li>

<li><a href="php/logout.php">Logout</a></li>

</ul>

</div>

<div class="container">

<h2>Manage Appointments</h2>

<table>

<tr>

<th>ID</th>

<th>Name</th>

<th>Mobile</th>

<th>Department</th>

<th>Doctor</th>

<th>Date</th>

<th>Time</th>

<th>Status</th>

<th>Action</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM appointments ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['doctor']; ?></td>

<td><?php echo $row['date']; ?></td>

<td><?php echo $row['time']; ?></td>

<td>

<?php

if($row['status']=="Accepted")
echo "<span style='color:green;font-weight:bold;'>Accepted</span>";

elseif($row['status']=="Rejected")
echo "<span style='color:red;font-weight:bold;'>Rejected</span>";

else
echo "<span style='color:orange;font-weight:bold;'>Pending</span>";

?>

</td>

<td>

<a class="accept"
href="?accept=<?php echo $row['id']; ?>">Accept</a>

<a class="reject"
href="?reject=<?php echo $row['id']; ?>">Reject</a>

<a class="delete"
href="?delete=<?php echo $row['id']; ?>"
onclick="return confirm('Delete Appointment?')">

Delete

</a>

</td>

</tr>

<?php

}

?>

</table>

</div>

<footer>

© 2026 Government Hospital Information System

</footer>

</body>

</html>