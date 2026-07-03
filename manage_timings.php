<?php
include 'php/db.php';
if(isset($_GET['update']))
{
    $id = $_GET['update'];
    $timing = mysqli_real_escape_string($conn, $_GET['timing']);

    mysqli_query($conn,
        "UPDATE timings
         SET timing='$timing'
         WHERE timing_id='$id'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Manage OP Timings</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;
    background:#eef5ff;
}

.admin-header{
    background:#1565c0;
    color:#fff;
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
    list-style:none;
    display:flex;
    margin:0;
    padding:0;
}

.admin-nav ul li a{
    color:white;
    text-decoration:none;
    display:block;
    padding:15px 25px;
}

.admin-nav ul li a:hover{
    background:#1976d2;
}

.container{
    width:80%;
    margin:30px auto;
}

.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.add-btn{
    background:#28a745;
    color:white;
    text-decoration:none;
    padding:12px 18px;
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
    padding:10px;
    font-size:18px;
}

table td{
    text-align:center;
    padding:10px;
    border-bottom:1px solid #ddd;
    font-size:17px;
}

table tr:hover{
    background:#f5f9ff;
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

.top-bar{
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:20px;
}

.page-title{
    margin:0;
    text-align:center;
    width:100%;
    color:#1565c0;
}

</style>

</head>

<body>

<div class="admin-header">

<h1>

<i class="fa-solid fa-clock"></i>

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
    <h2 class="page-title">Manage OP Timings</h2>
</div>

</div>

<table>

<tr>

<th>ID</th>

<th>Department</th>

<th>Doctor</th>

<th>Days</th>

<th>Timing</th>

<th>Action</th>

</tr>

<?php

$q=mysqli_query($conn,"SELECT * FROM timings");

while($r=mysqli_fetch_assoc($q))
{

?>

<tr>

<td><?php echo $r['timing_id']; ?></td>

<td><?php echo $r['department']; ?></td>

<td><?php echo $r['doctor']; ?></td>

<td><?php echo $r['days']; ?></td>

<td>
    <span id="text_<?php echo $r['timing_id']; ?>">
        <?php echo $r['timing']; ?>
    </span>

    <input type="text"
           id="input_<?php echo $r['timing_id']; ?>"
           value="<?php echo $r['timing']; ?>"
           style="display:none;width:170px;">
</td>

<td>

<button class="edit-btn"
        onclick="editTiming(<?php echo $r['timing_id']; ?>, this)">
    <i class="fa-solid fa-pen-to-square"></i> Edit
</button>

&nbsp;

<a href="#"
class="delete-btn"
onclick="return confirm('Delete this timing?')">

<i class="fa-solid fa-trash"></i>

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
<script>
function editTiming(id, btn)
{
    let text = document.getElementById("text_" + id);
    let input = document.getElementById("input_" + id);

    if(btn.innerText.trim() == "Edit")
    {
        text.style.display = "none";
        input.style.display = "inline";
        btn.innerHTML = '<i class="fa-solid fa-check"></i> Update';
    }
    else
    {
        let timing = input.value;

        window.location =
        "manage_timings.php?update=" + id +
        "&timing=" + encodeURIComponent(timing);
    }
}
</script>

</body>

</html>