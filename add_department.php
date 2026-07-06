<?php
include 'php/db.php';
?>

<!DOCTYPE html>

<html>

<head>

<title>Add Department</title>

<link rel="stylesheet" href="css/style.css">

<style>

body{
background:#eef5ff;
font-family:Arial;
}

.container{
width:500px;
margin:50px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,.2);
}

h2{
text-align:center;
color:#1565c0;
}

input,
textarea{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#1565c0;
color:white;
border:none;
border-radius:5px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#0d47a1;
}

</style>

</head>

<body>

<div class="container">

<h2>Add Department</h2>

<form action="php/add_department_process.php" method="POST">

<input type="text"
name="department_name"
placeholder="Department Name"
required>

<input type="text"
name="doctor_name"
placeholder="Doctor Name"
required>

<input type="text"
name="location"
placeholder="Location"
required>

<textarea
name="description"
placeholder="Department Description"
required>

</textarea>

<button type="submit">

Add Department

</button>

</form>

</div>

</body>

</html>