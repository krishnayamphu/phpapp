<?php
$file="document.txt";
$data="Aptech";
$myfile = fopen($file, "w") or die("Unable to open file!");
fwrite($myfile, $data);
echo "Data write successfully";
fclose($myfile);