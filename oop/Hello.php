<?php

class Hello{

	const MSG="Hello World";

  	const HI="HI, World";

  	public function sayHello()
  	{
  		echo self::MSG;
  	}

  }

  echo Hello::MSG;
  echo Hello::HI;

  $hi=new Hello();

echo "<br>";

  $hi->sayHello();
