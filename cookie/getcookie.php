<?php

if(isset($_COOKIE['user'])){
	$cookie=$_COOKIE['user'];

echo "Username:".$cookie;
}else{
	echo "cookie not found !";
}
