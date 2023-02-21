<?php
$x=10; //global scope

function test()
{
	$y=5; //local scope
	$GLOBALS['z']=100;
	echo $y;
	echo "<br>".$GLOBALS['x'];
}

test();

echo "<br>".$z;
