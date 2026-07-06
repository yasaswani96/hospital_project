<?php

include "db.php";

$doctor=$_POST['doctor_name'];

$department=$_POST['department'];

$experience=$_POST['experience'];

$availability=$_POST['availability'];

$image=$_FILES['image']['name'];

$tmp=$_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"../images/".$image);

$sql="INSERT INTO doctors
(doctor_name,department,experience,availability,image)

VALUES

('$doctor','$department','$experience','$availability','$image')";

if(mysqli_query($conn,$sql))
{
echo "<script>

alert('Doctor Added Successfully');

window.location='../manage_doctors.php';

</script>";
}
else
{
echo mysqli_error($conn);
}

?>