<?php
$mydir="uploads";
$files=glob($mydir.'/*.*');
foreach($files as $file) {
    echo $file."<br>";
}

