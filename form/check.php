<?php

$username=$_POST['username'];
$password=$_POST['password'];

if($username=="admin" && $password=="a123"){
	header('Location: welcome.php');
}else{
	header('Location:login.php?err');
}