<?php

class Fruit {
  public $name;

  function __construct($name) {
  	echo "contructor called";
    $this->name = $name;
  }


  function __destruct() {
    echo "The fruit is {$this->name}. <br> deconstructor called.";
  }
}

$fruit=new Fruit("Mango");

