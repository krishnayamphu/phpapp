<?php
require_once('A.php');
class AbstractDemo extends A{
	
}


$demo=new AbstractDemo();

$demo->x=5;

echo "Value:".$demo->x;

