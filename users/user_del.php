<?php
include '../database/connect.php';

$id=$_POST['id'];

// sql to delete a record
$sql = "DELETE FROM users WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("Location:users.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();