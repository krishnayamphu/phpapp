<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
</head>
<body>
	<h2>Create New User</h2>
	<a href="users.php">All Users</a>
	<hr>
	<?php include '../database/connect.php'; ?>
	<form action="user_update.php" method="post">
<?php
	$id =$_GET['id'];

	$sql = "SELECT * FROM users WHERE id=$id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>


<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Username:</label>
		<input type="text" name="username" value="<?php echo $row['username']; ?>">
		<br><br>

  	<?php
  }

}

?>

		<label>Password:</label>
		<input type="Password" name="password" placeholder="enter new password">
		<br><br>

		<button type="submit">Update User</button>
	</form>

<?php
$conn->close();
?>
</body>
</html>