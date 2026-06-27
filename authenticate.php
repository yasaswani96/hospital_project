<<<<<<< HEAD
<?php
session_start();
include 'db_connect.php';

$u=$_POST['username'];
$p=$_POST['password'];
$r=$_POST['role'];

$q=mysqli_query($conn,
"SELECT * FROM users
WHERE username='$u'
AND password='$p'
AND role='$r'");

if(mysqli_num_rows($q)>0){

$_SESSION['user']=$u;
$_SESSION['role']=$r;

if($r=="admin")
header("location:admin_dashboard.php");
else
header("location:index.php");

}else{
echo "Invalid Login";
}
=======
<?php
session_start();
include 'db_connect.php';

$u=$_POST['username'];
$p=$_POST['password'];
$r=$_POST['role'];

$q=mysqli_query($conn,
"SELECT * FROM users
WHERE username='$u'
AND password='$p'
AND role='$r'");

if(mysqli_num_rows($q)>0){

$_SESSION['user']=$u;
$_SESSION['role']=$r;

if($r=="admin")
header("location:admin_dashboard.php");
else
header("location:index.php");

}else{
echo "Invalid Login";
}
>>>>>>> 2c4d01f9adebee62e3040483ea3380205936278a
?>