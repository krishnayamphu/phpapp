<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>All Users</title>
  </head>
<body>
  <div class="container mt-5">
    



	<?php include '../database/connect.php'; ?>
<h2>All Users</h2>
  <a href="user_reg.php">New User</a>

<table class="table">
  		<tr>
  			<th>ID</th>
  			<th>Username</th>
  			<th>Password</th>
  			<th>Action</th>
  		</tr>
  

	<?php
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);
$count=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $count++;
  	?>
  	<tr>
  		<td><?php echo $row["id"]; ?></td>
  		<td><?php echo $row["username"]; ?></td>
  		<td><?php echo $row["password"]; ?></td>
  		<td>
  			<a class="btn btn-primary" href="user_edit.php?id=<?php echo $row['id'];?>">Edit</a>
        <!-- modal start -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo($row['id']);?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo($row['id']);?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to delete this user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="user_del.php" method="post">
          <input type="hidden" name="id" value="<?php echo($row['id']); ?>">
          <button type="submit" class="btn btn-primary">Confirm</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
        <!-- modal end -->
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
<br>
<p>
  Total Users: <?php echo $count; ?>
</p>

  </div>


  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>