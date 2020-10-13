<?php
include '../database/connect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$encrypted=md5($password);
// sql to insert a new record
$sql = "INSERT INTO users (username,password) VALUES ('$username','$encrypted')";

if ($conn->query($sql) === TRUE) {
  echo "Record inserted successfully";
  header("Location:users.php");
} else {
  echo "Error inserting record: " . $conn->error;
}

$conn->close();