<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Appointment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Book Appointment</h2>

<form action="book_appointment.php" method="post">

<label>Patient Name</label>
<input type="text" name="patient_name" required>

<label>Mobile</label>
<input type="text" name="mobile" required>

<label>Doctor</label>
<select name="doctor_name">
<?php
$result=mysqli_query($conn,"SELECT * FROM doctors");
while($row=mysqli_fetch_assoc($result)){
    echo "<option>".$row['name']."</option>";
}
?>
</select>

<label>Date</label>
<input type="date" name="appointment_date" required>

<button type="submit">Book Appointment</button>

</form>

</body>
</html>
