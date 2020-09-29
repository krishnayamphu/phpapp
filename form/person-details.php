<?php

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$courses=$_POST['courses'];
$country=$_POST['country'];


echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Gender: ".$gender."<br>";
echo "Courses: ";
foreach ($courses as $course) {
	echo $course.", ";
}

echo "<br>Country:".$country;