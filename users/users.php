<!DOCTYPE html>
<html>
<head>
	<title>All Users</title>
</head>
<body>


	<?php include '../database/connect.php'; ?>
<h2>All Users</h2>
  <a href="user_reg.php">New User</a>
  <hr>
<table border="1">
  		<tr>
  			<th>ID</th>
  			<th>Username</th>
  			<th>Password</th>
  			<th>Action</th>
  		</tr>
  

	<?php
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>
  	<tr>
  		<td><?php echo $row["id"]; ?></td>
  		<td><?php echo $row["username"]; ?></td>
  		<td><?php echo $row["password"]; ?></td>
  		<td>
  			<a href="#">Edit</a>
  			<form action="user_del.php" method="post">
  				<input type="hidden" name="id" value="<?php echo($row['id']); ?>">

  				<button type="submit">Delete</button>
  			</form>
  		</td>
  	</tr>

    <?php
  }

} else {
  echo "no records are found.";
}

$conn->close();

?>
</table>
</body>
</html>