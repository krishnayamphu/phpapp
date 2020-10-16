<?php

$file="docs.txt";

if (file_exists($file)){
	unlink($file);
	echo "file deleted successfully.";
}else{
	echo "file not found";
}


