<<<<<<< HEAD
<?php
include 'db_connect.php';

$id=$_GET['id'];

$q=mysqli_query($conn,"SELECT * FROM doctors WHERE id=$id");
$row=mysqli_fetch_assoc($q);

if(isset($_POST['update'])){

$name=$_POST['name'];
$spec=$_POST['specialization'];
$status=$_POST['availability'];

mysqli_query($conn,
"UPDATE doctors SET
name='$name',
specialization='$spec',
availability='$status'
WHERE id=$id");

header("Location: manage_doctors.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Doctor</h2>

<form method="POST">

<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<input type="text" name="specialization"
value="<?php echo $row['specialization']; ?>">

<select name="availability">
<option>Available</option>
<option>Not Available</option>
</select>

<button name="update">Update Doctor</button>

</form>

</body>
</html>
=======
<?php
include 'db_connect.php';

$id=$_GET['id'];

$q=mysqli_query($conn,"SELECT * FROM doctors WHERE id=$id");
$row=mysqli_fetch_assoc($q);

if(isset($_POST['update'])){

$name=$_POST['name'];
$spec=$_POST['specialization'];
$status=$_POST['availability'];

mysqli_query($conn,
"UPDATE doctors SET
name='$name',
specialization='$spec',
availability='$status'
WHERE id=$id");

header("Location: manage_doctors.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Edit Doctor</h2>

<form method="POST">

<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<input type="text" name="specialization"
value="<?php echo $row['specialization']; ?>">

<select name="availability">
<option>Available</option>
<option>Not Available</option>
</select>

<button name="update">Update Doctor</button>

</form>

</body>
</html>
>>>>>>> 2c4d01f9adebee62e3040483ea3380205936278a
