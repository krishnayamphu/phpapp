<?php
session_start();
if (isset($_POST["submit"])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username=="admin" && $password=="a123"){
		$_SESSION['user']=$username;
		header('location:profile.php');
	}else{
		header('location:login.php');
	}
}





