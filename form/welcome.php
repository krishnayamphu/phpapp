<?php
session_start();
if(!isset($_SESSION['user'])){
	header('Location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
<header>
	<form method="post" action="logout.php">
		<button>Logout</button>
	</form>
</header>

	<h1>Welcome to Dashboard</h1>
		<p><?php echo $_SESSION['user']; ?></p>
	<p>Hello World</p>
	
</body>
</html>