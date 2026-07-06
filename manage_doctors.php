<?php
include 'php/db.php';
if(isset($_GET['toggle']))
{
    $id = $_GET['toggle'];

    $q = mysqli_query($conn,"SELECT availability FROM doctors WHERE doctor_id='$id'");
    $r = mysqli_fetch_assoc($q);

    if($r['availability']=="Available")
        $status="Unavailable";
    else
        $status="Available";

    mysqli_query($conn,"UPDATE doctors SET availability='$status' WHERE doctor_id='$id'");

    header("Location: manage_doctors.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Doctors</title>

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    margin:0;
    background:#eef5ff;
    font-family:'Poppins',sans-serif;
}

.admin-header{
    background:#1565c0;
    color:#fff;
    padding:20px 40px;
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
    list-style:none;
    display:flex;
}

.admin-nav li{
    margin:0;
}

.admin-nav a{
    display:block;
    color:#fff;
    padding:15px 25px;
    text-decoration:none;
}

.admin-nav a:hover{
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
}

.top-bar h2{
    color:#1565c0;
}

.add-btn{
    background:#28a745;
    color:#fff;
    padding:12px 20px;
    text-decoration:none;
    border-radius:5px;
    font-weight:bold;
}

.add-btn:hover{
    background:#218838;
}

.search-box input{
    padding:10px;
    width:250px;
    border:1px solid #ccc;
    border-radius:5px;
}

.search-box button{
    padding:10px 15px;
    background:#1565c0;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:10px;
    overflow:hidden;
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

.doctor-img{
    width:60px;
    height:60px;
    border-radius:50%;
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
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:5px;
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

</style>

</head>

<body>

<div class="admin-header">

<h1><i class="fa-solid fa-user-doctor"></i> Government Hospital Admin</h1>

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

<div class="top-bar">

    <h2>Manage Doctors</h2>

    <a href="add_doctor.php" class="add-btn">
        <i class="fa-solid fa-plus"></i> Add Doctor
    </a>

</div>

<div class="search-box">

<form method="GET">

<input type="text" name="search" placeholder="Search Doctor">

<button type="submit">

<i class="fa-solid fa-magnifying-glass"></i>

Search

</button>

</form>

</div>

<br>

<table>

<tr>
<th>ID</th>
<th>Photo</th>
<th>Doctor Name</th>
<th>Department</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php

$sql="SELECT * FROM doctors";

if(isset($_GET['search']) && $_GET['search']!=""){

$search=mysqli_real_escape_string($conn,$_GET['search']);

$sql="SELECT * FROM doctors
WHERE doctor_name LIKE '%$search%'
OR department LIKE '%$search%'";

}

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['doctor_id']; ?></td>

<td>
<img src="images/<?php echo $row['image']; ?>" class="doctor-img">
</td>

<td><?php echo $row['doctor_name']; ?></td>

<td><?php echo $row['department']; ?></td>

<td>

<?php
if($row['availability']=="Available")
{
    echo "<span style='color:green;font-weight:bold;font-size:18px;'>🟢 Available</span>";
}
else
{
    echo "<span style='color:red;font-weight:bold;font-size:18px;'>🔴 Unavailable</span>";
}
?>

</td>

<td>

<a href="manage_doctors.php?toggle=<?php echo $row['doctor_id']; ?>" class="edit-btn">

<?php
if($row['availability']=="Available")
{
    echo "Unavailable";
}
else
{
    echo "Available";
}
?>

</a>

<a href="delete_doctor.php?id=<?php echo $row['doctor_id']; ?>"
class="delete-btn"
onclick="return confirm('Delete this doctor?')">

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