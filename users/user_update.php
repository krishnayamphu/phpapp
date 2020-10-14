<?php
include '../database/connect.php';

$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];

$encrypted=md5($password);
// sql to insert a new record
$sql = "UPDATE users SET username='$username', password='$encrypted' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location:users.php");
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();