<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	include 'Person.php';



$person1=new Person();

$person1->name="Ram";
$person1->age=24;



echo "Person Name:".$person1->name;
echo "<br>Person Age:".$person1->age;

$person2=new Person();

$person2->name="Sita";
$person2->age=20;

echo "<br><br>Person Name:".$person2->name;
echo "<br>Person Age:".$person2->age;

echo "<br>";
$person2->info();

//get default age

echo "<br>Default Age: ".$person2->getDefaultAge();

	?>

</body>
</html>