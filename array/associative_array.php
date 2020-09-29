<?php
$employee = array('Ram' =>40 ,'Sita'=>30);

echo "Age: ".$employee['Ram'];

echo "<br>================<br>";

foreach ($employee as $name => $age) {
	echo "<br>Employee Name: ".$name;
	echo "<br>Employee Age: ".$age;
}



