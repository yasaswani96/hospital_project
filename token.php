<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Token</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Token Details</h2>

<table>
<tr>
    <th>Patient Name</th>
    <th>Doctor</th>
    <th>Token</th>
</tr>

<?php
$result=mysqli_query($conn,"SELECT * FROM appointments");
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$row['patient_name']."</td>
            <td>".$row['doctor_name']."</td>
            <td>".$row['token_no']."</td>
          </tr>";
}
?>
</table>

</body>
</html>