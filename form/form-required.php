<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<style type="text/css">
		.err{
			color: red;
		}
	</style>
</head>
<body>
		<?php
	$err="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_POST['username'])){
			$err="*username required";
		}
	}



	?>
<br>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		
		<br>
		<label>Username</label>
		<input type="text" name="username">
		<span class="err"><?php echo $err; ?></span>
		<br><br>
		<button>Submit</button>
	</form>



</body>
</html>