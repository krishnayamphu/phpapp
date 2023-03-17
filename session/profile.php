<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User login</title>
</head>
<body>
	<h1>Welcome Admin</h1>
<form action="logout.php" method="post">
	<button>Logout</button>
</form>
</body>
</html>