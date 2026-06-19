<?php
$conn=mysqli_connect(
    "sql204.infinityfree.com",
    "if0_42032401",
    "sswani92",
    "if0_42032401_hospitaldb"
);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}
?>
