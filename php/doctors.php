<?php

include "db.php";

$sql="SELECT * FROM doctors";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

echo $row['doctor_name']."<br>";

}

?>