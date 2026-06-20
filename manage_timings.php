<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Manage OPD Timings</h2>

<table>
<tr>
<th>Department</th>
<th>Morning</th>
<th>Evening</th>
<th>Action</th>
</tr>

<?php
$q=mysqli_query($conn,"SELECT * FROM timings");

while($r=mysqli_fetch_assoc($q)){
echo "
<tr>
<td>".$r['department']."</td>
<td>".$r['morning']."</td>
<td>".$r['evening']."</td>
<td>
<a class='edit-btn'
href='edit_timing.php?id=".$r['id']."'>
Edit
</a>
</td>
</tr>
";
}
?>

</table>

</body>
</html>