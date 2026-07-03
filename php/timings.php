<?php

include "db.php";

$sql="SELECT * FROM timings";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

echo $row['department']." - ".$row['timing']."<br>";

}

?>