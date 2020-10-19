<?php
class Person 
{
	//fields or members
	public $name;
	public $age;

//method
	public function info()
	{
		echo "Person object created.";
	}

	public function getDefaultAge()
	{
		return 18;
	}
}
