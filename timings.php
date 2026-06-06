<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>OPD Timings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>OPD Timings</h1>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="doctors.php">Doctors</a>
    <a href="departments.php">Departments</a>
</nav>

<div class="container">
    <table>
        <tr>
            <th>Department</th>
            <th>Morning</th>
            <th>Evening</th>
        </tr>

        <?php
        $q = mysqli_query($conn, "SELECT * FROM timings ORDER BY department");

        while($row = mysqli_fetch_assoc($q)){
            echo "<tr>
                    <td>{$row['department']}</td>
                    <td>{$row['morning']}</td>
                    <td>{$row['evening']}</td>
                  </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>