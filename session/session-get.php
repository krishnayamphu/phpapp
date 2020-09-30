<?php

session_start();

if(isset($_SESSION['user'])){
	echo "Username: ".$_SESSION['user'];
}else {
	echo "session is not set yet.";
}


