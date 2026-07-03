<?php

include "db.php";

$sql="SELECT * FROM departments";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

echo $row['department_name']."<br>";

}

?>