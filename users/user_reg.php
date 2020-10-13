<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h2>Create New User</h2>
	<a href="users.php">All Users</a>
	<hr>
	<form action="user_save.php" method="post">
		<label>Username:</label>
		<input type="text" name="username">
		<br><br>

		<label>Password:</label>
		<input type="Password" name="password">
		<br><br>

		<button type="submit">Create User</button>
	</form>
</body>
</html>