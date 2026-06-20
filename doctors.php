<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Doctors</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Doctors List</h2>

<table>
<tr>
    <th>Name</th>
    <th>Specialization</th>
    <th>Status</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM doctors");
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$row['name']."</td>
            <td>".$row['specialization']."</td>
            <td>".$row['availability']."</td>
          </tr>";
}
?>
</table>

</body>
</html>