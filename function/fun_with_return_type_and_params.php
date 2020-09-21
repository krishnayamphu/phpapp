<?php
//function with parameters
$a=10;
$b=5;

function getTotalSum($x,$y)
{
	return $x+$y;
}

function getMultiply($x,$y)
{
	return $x*$y;
}
function getSubtract($x,$y)
{
	return $x-$y;
}



// $totalSum=getTotalSum(10,20);

echo "a=".$a.", b=".$b;

echo "<br>Total sum: ".getTotalSum($a,$b); //15

echo "<br>Multiply : ".getMultiply($a,$b);//50

echo "<br>Subtract : ".getSubtract($a,$b); //5

