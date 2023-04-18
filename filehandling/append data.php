<?php
$file="document.txt";
$data=" Computer Education";
$myfile = fopen($file, "a+") or die("Unable to open file!");
fwrite($myfile, $data);
echo "Data write successfully";
fclose($myfile);