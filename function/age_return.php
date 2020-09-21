<!DOCTYPE html>
<html>
<head>
	<title>Dynamic age</title>
</head>
<body>
<?php
echo "your age is: ". $_GET['age'];

?>
	<form method="get" action="#">
		<label>Enter Age:</label>
		<input type="number" name="age" placeholder="e.g.: 20" required>
		<br><br>
		<button type="Submit">
			Submit
		</button>
	</form>

</body>
</html>