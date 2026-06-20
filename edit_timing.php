<?php
include 'db_connect.php';

$id=$_GET['id'];

$q=mysqli_query($conn,"SELECT * FROM timings WHERE id=$id");
$row=mysqli_fetch_assoc($q);

if(isset($_POST['update'])){

$department=$_POST['department'];
$morning=$_POST['morning'];
$evening=$_POST['evening'];

mysqli_query($conn,
"UPDATE timings SET
department='$department',
morning='$morning',
evening='$evening'
WHERE id=$id");

header("Location: manage_timings.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Timing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit OPD Timing</h2>

<form method="POST">

<label>Department</label>
<input type="text" name="department"
value="<?php echo $row['department']; ?>">

<label>Morning</label>
<input type="text" name="morning"
value="<?php echo $row['morning']; ?>">

<label>Evening</label>
<input type="text" name="evening"
value="<?php echo $row['evening']; ?>">

<button name="update">Update Timing</button>

</form>

</body>
</html>
