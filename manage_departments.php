<?php
include 'php/db.php';
if(isset($_GET['toggle']))
{
    $id = (int)$_GET['toggle'];

    $result = mysqli_query($conn, "SELECT availability FROM doctors WHERE doctor_id='$id'");
    $row = mysqli_fetch_assoc($result);

    if($row['availability'] == "Available")
        $status = "Unavailable";
    else
        $status = "Available";

    mysqli_query($conn, "UPDATE doctors SET availability='$status' WHERE doctor_id='$id'");

    header("Location: manage_doctors.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Departments</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    margin:0;
    background:#eef5ff;
    font-family:Arial,sans-serif;
}

.admin-header{
    background:#1565c0;
    color:white;
    padding:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.admin-header h1{
    margin:0;
}

.admin-nav{
    background:#0d47a1;
}

.admin-nav ul{
    margin:0;
    padding:0;
    display:flex;
    list-style:none;
}

.admin-nav ul li a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 25px;
}

.admin-nav ul li a:hover{
    background:#1976d2;
}

.container{
    width:95%;
    margin:30px auto;
}

.top-bar{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:25px;
}

.top-bar h2{
    color:#1565c0;
    font-size:42px;
    font-weight:bold;
}

.add-btn{

background:#28a745;

color:white;

padding:12px 20px;

text-decoration:none;

border-radius:5px;

font-weight:bold;

}

.add-btn:hover{

background:#218838;

}

table{

width:100%;

border-collapse:collapse;

background:white;

box-shadow:0 8px 20px rgba(0,0,0,.1);

}

table th{

background:#1565c0;

color:white;

padding:15px;

}

table td{

padding:15px;

text-align:center;

border-bottom:1px solid #ddd;

}

table tr:hover{

background:#f5f9ff;

}

.department-img{

width:70px;

height:70px;

border-radius:10px;

object-fit:cover;

}

.edit-btn{

background:#0d6efd;

color:white;

padding:8px 15px;

text-decoration:none;

border-radius:5px;

}

.delete-btn{
    background:#dc3545;
    color:#fff;
    padding:10px 18px;
    text-decoration:none;
    border-radius:6px;
    display:inline-block;
    font-weight:bold;
}

.edit-btn:hover{

background:#0b5ed7;

}

.delete-btn:hover{

background:#bb2d3b;

}

footer{

margin-top:40px;

background:#1565c0;

color:white;

text-align:center;

padding:15px;

}
.action-buttons{
    text-align:center;
}

.edit-btn,
.delete-btn{
    display:inline-block;
    padding:8px 15px;
    border-radius:5px;
    color:#fff;
    text-decoration:none;
    font-size:15px;
    min-width:85px;
    text-align:center;
}

.edit-btn{
    background:#0d6efd;
}

.edit-btn:hover{
    background:#0b5ed7;
}

.delete-btn{
    background:#dc3545;
}

.delete-btn:hover{
    background:#bb2d3b;
}

</style>

</head>

<body>

<div class="admin-header">

<h1>

<i class="fa-solid fa-hospital"></i>

Government Hospital Admin

</h1>

<div>

Welcome Admin

</div>

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

<div class="top-bar">

    <h2>Manage Departments</h2>

    <a href="add_department.php" class="add-btn">
        <i class="fa-solid fa-plus"></i> Add Department
    </a>

</div>

<table>

<tr>

<th>ID</th>

<th>Department Name</th>

<th>Doctor Name</th>

<th>Location</th>

<th>Description</th>

<th>Action</th>

</tr>

<?php

$result=mysqli_query($conn,"SELECT * FROM departments");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['department_id']; ?></td>

<td><?php echo $row['department_name']; ?></td>

<td><?php echo $row['doctor_name']; ?></td>

<td><?php echo $row['location']; ?></td>

<td><?php echo $row['description']; ?></td>

<td class="action-buttons">

<a href="delete_department.php?id=<?php echo $row['department_id']; ?>"
class="delete-btn"
onclick="return confirm('Are you sure you want to delete this department?')">

<i class="fa-solid fa-trash"></i> Delete

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