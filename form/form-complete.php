<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>
<?php
	$data="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$data= $_POST['data'];
		echo "Data: ".$data;
	}

?>
<br>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label>Email</label>
		<input type="text" name="data" value="<?php echo $data; ?> ">
		<br><br>
		<button>Submit</button>
	</form>



</body>
</html>