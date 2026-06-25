<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Departments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Manage Departments</h2>

<table>
<tr>
    <th>ID</th>
    <th>Department</th>
    <th>Service</th>
    <th>Location</th>
</tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM departments");

while($r=mysqli_fetch_assoc($q)){
echo "
<tr>
<td>".$r['id']."</td>
<td>".$r['name']."</td>
<td>".$r['service']."</td>
<td>".$r['location']."</td>
</tr>
";
}
?>

</table>

</body>
</html>