<?php

if(isset($_COOKIE['user'])){
	setcookie('user','',time()-3600);

echo "cookies deleted.";
}else{
	echo "cookie not found !";
}
