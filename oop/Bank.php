<?php
/**
 * 
 */
class Bank
{
	public $address;
	function __construct($address)
	{
		$this->address=$address;
	}

	public function getAddress()
	{
		 echo "Address: ".$this->address;
	}
}



$sanima=new Bank("Naxal");
$sanima->getAddress(); //Naxal
