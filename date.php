<!DOCTYPE html>
<html>
<head>
	<title>Date</title>
</head>
<body>
<p>
	&copy; 2010-<?php echo date("Y");?>
</p>

<p>
	Date:<?php echo date("d/m/Y"); ?>
</p>

<p>
	<?php
	date_default_timezone_set("Asia/Kathmandu");
echo "The time is " . date("h:i:sa");
?>
</p>
</body>
</html>


