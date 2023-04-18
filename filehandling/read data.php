<?php
$file="document.txt";
$myfile = fopen($file, "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);