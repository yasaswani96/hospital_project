<?php

include "db.php";

$department=$_POST['department_name'];

$doctor=$_POST['doctor_name'];

$location=$_POST['location'];

$description=$_POST['description'];

$sql="INSERT INTO departments
(department_name,doctor_name,location,description)

VALUES

('$department','$doctor','$location','$description')";

if(mysqli_query($conn,$sql))
{

echo "<script>

alert('Department Added Successfully');

window.location='../manage_departments.php';

</script>";

}
else
{

echo mysqli_error($conn);

}

?>