<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Doctors</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Manage Doctors</h2>

<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Specialization</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM doctors");

while($r=mysqli_fetch_assoc($q)){
echo "
<tr>
<td>".$r['id']."</td>
<td>".$r['name']."</td>
<td>".$r['specialization']."</td>
<td>".$r['availability']."</td>
<td>
<a class='edit-btn' href='edit_doctor.php?id=".$r['id']."'>Edit</a>
</td>
</tr>
";
}
?>

</table>

</body>
</html>