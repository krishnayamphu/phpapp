<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<input type="" name="username">
	<br><br>
	<button>Submit</button>
</form>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $name = $_REQUEST['username'];
	  echo "Username: ".$name;
	}
?>

</body>
</html>
