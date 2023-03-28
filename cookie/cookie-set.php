<?php
$value=md5("Aptech");
setcookie("user",$value,time()+86400*30); //1 month
echo "cookie set successfully.";