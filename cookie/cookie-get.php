<?php
if(!isset($_COOKIE['user'])){
    echo "cookie is not set";
}else{
     $user=$_COOKIE['user'];
     echo "Username: ".$user;
}