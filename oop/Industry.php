<?php
require_once('Mobile.php');

/**
 * APPLE
 */
class Apple extends Mobile
{
	public function playSong()
	{
		echo "Playing song from apple mobile";
	}
}

/**
 * SAMSUNG
 */
class Samsung extends Mobile
{
	
	public function playSong()
	{
		echo "Playing song from samsung mobile";
	}
}

$a=new Apple;
$s=new Samsung;

$a->playSong();

echo "<br>";
$s->playSong();