<?php
$name=$_POST['medianame'];

$file="../uploads/$name";

if (file_exists($file)){
  unlink($file);
  echo "file deleted successfully.";
  header('Location:media.php');
}else{
  echo "$name file not found ";
}


