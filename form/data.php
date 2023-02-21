<?php
$username=$_POST['username'];
$password=$_POST['password'];
$gender=$_POST['g'];
$courses=array(); //create an empty array
$courses=$_POST['courses'];
$country=$_POST['country'];
$remarks=$_POST['remarks'];
$date=$_POST['date'];


echo "Username: ".$username;
echo "<br>Password: ".$password;
echo "<br>Gender: ".$gender;
echo "<br>courses: ";
foreach($courses as $c)
{
	echo $c.", ";
}
echo "<br>Country: ".$country;
echo "<br>Remarks: ".$remarks;
echo "<br>Date: ".$date;