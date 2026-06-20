<?php include 'db_connect.php'; ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>Departments</h1>
</header>

<div class="container">
<table>
<tr>
<th>Name</th>
<th>Service</th>
<th>Location</th>
</tr>

<?php
$q = mysqli_query($conn,"SELECT * FROM departments");

while($r = mysqli_fetch_assoc($q)){
echo "<tr>
<td>".$r['name']."</td>
<td>".$r['service']."</td>
<td>".$r['location']."</td>
</tr>";
}
?>
</table>
</div>

</body>
</html>
