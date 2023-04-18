<?php
$file="newfile.txt";
$myfile = fopen($file, "w") or die("Unable to open file!");
echo "file created successfully";
fclose($myfile);