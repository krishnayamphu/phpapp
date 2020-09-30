<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username=="admin" && $password=="a123"){
	$_SESSION['user']=$username;
	
	header('Location: welcome.php');
}else{
	header('Location:login.php?err');
}