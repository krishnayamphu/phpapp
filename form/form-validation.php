<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
</head>
<body>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label>Username</label>
		<input type="text" name="username">
		<br><br>
		<button>Submit</button>
	</form>
<hr><br>

	<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name=valid($_POST['username']);

		echo "Name:".$name;
	}

	function valid($data)
	{
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;			
	}

	?>
</body>
</html>