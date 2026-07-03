<?php
include 'php/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage Messages</title>

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
    font-size:38px;
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
    width:95%;
    margin:0 auto;
    border-collapse:collapse;
    background:#fff;
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

.action-buttons{
    display:flex;
    justify-content:center;
}

.delete-btn{
    background:#dc3545;
    color:#fff;
    padding:10px 20px;
    border-radius:5px;
    text-decoration:none;
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

<h2>Manage Messages</h2>

</div>

<table>



<?php

$result = mysqli_query($conn, "SELECT * FROM contact_messages ORDER BY message_id DESC");

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

<th>Mobile</th>

<th>Message</th>

<th>Date</th>

<th>Action</th>

</tr>

<tr>

<td><?php echo $row['message_id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['message']; ?></td>

<td><?php echo $row['created_at']; ?></td>

<td class="action-buttons">

<a href="delete_message.php?id=<?php echo $row['message_id']; ?>"
class="delete-btn"
onclick="return confirm('Delete this message?')">
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