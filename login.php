<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header>
<h1>City Government Hospital</h1>
</header>

<div class="container">
<h2>Login Portal</h2>

<form action="authenticate.php" method="POST">

Username:
<input type="text" name="username"><br><br>

Password:
<input type="password" name="password"><br><br>

Role:
<select name="role">
<option value="user">User</option>
<option value="admin">Admin</option>
</select><br><br>

<button>Login</button>

</form>
</div>
</body>
</html>
