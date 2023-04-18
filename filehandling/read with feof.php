<?php
$file="document.txt";
$myfile = fopen($file, "r") or die("Unable to open file!");
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);