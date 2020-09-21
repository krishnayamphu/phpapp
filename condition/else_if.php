<?php


$p=$_GET['percentage']; //90

if($p>=80){
	echo "Dest.";
}else if ($p>=60) {
	echo "First";
}else if($p>=45){
	echo "Second";
}else if($p>=35){
	echo "Third";
}else{
	echo "Fail";
}

echo "<br><br><a href='form.html'>Go Back</a>";