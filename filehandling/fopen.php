<?php

//fopen($filename,$mode);

$file=fopen("data.txt", "r") or die("Unable open file.");

echo "file select success.<br>";

echo fread($file,filesize("data.txt"));

fclose($file);
