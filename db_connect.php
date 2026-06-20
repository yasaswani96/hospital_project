<?php
$conn = mysqli_connect(
    "acela.proxy.rlwy.net",
    "root",
    "NzpIWaLGqSYBSHenpuQiExvVxvSrFPUI",
    "railway",
    47288
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
