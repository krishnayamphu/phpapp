<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
</head>
<body>

<?php
date_default_timezone_set("Asia/Kathmandu");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");

echo "<hr>";

echo "Year: " . date("Y") . "<br>";
echo "Month: " . date("m") . "<br>";
echo "Day: " . date("d") . "<br>";

echo "<hr>";
echo "Hours [24]: " . date("H") . "<br>";
echo "Hours [12]: " . date("h") . "<br>";
echo "Minutes: " . date("i") . "<br>";
echo "Seconds: " . date("s") . "<br>";
echo "Status: " . date("a") . "<br>";
echo "Time: " . date("h:i:sa") . "<br>";
echo "<br>";
echo "Date Time: " . date("Y-m-d h:i:sa") . "<br>";
echo "<hr>";
$d=mktime(12, 12, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>


</body>
</html>