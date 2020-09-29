<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
</head>
<body>

<h1>Login Form</h1>

<form action="check.php" method="post">
	<p style="color:red">	
		<?php

	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

		if($username=="admin" && $password=="a123"){
			header('Location: welcome.php');
		}else{
			header('Location:login.php?err');
		}
		

	}

	if(isset($_GET['err'])){

			echo "Invalid username or password";
		}
	?>
	</p>

	<br>
	<label>Usernme:</label>
	<input type="text" name="username" required>
	<br><br>
	<label>Password:</label>
	<input type="password" name="password" required>
	<br><br>
	<button type="submit" name="submit">Login</button>
</form>

</body>
</html>