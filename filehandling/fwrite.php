<?php

$myfile = fopen("docs.html", "w") or die("Unable to open file!");
// $txt = "Ramesh\n";
// fwrite($myfile, $txt);
// $txt = "Sita\n";
// fwrite($myfile, $txt);

$data="<html><head><title>Hello world</title></head><body>sample text </body></html>";

fwrite($myfile, $data);

fclose($myfile);

echo "file save successfully.";