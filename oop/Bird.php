<?php
require_once('Animal.php');

class Bird extends Animal {
	public $canfly;
  }

  $bird =new Bird();

  $bird->name="Sparrow";
  $bird->leg=2;
  $bird->color="Grey";
  $bird->canfly="Yes";


  echo "<br>Name: ".$bird->name;
  echo "<br>Legs: ".$bird->leg;
  echo "<br>Color: ".$bird->color;
  echo "<br>Fly: ".$bird->canfly;
  echo "<br>Food: ".$bird->eat();


  $bird1 =new Bird();

  $bird1->name="Eagle";
  $bird1->leg=2;
  $bird1->color="Grey";
  $bird1->canfly="Yes";


  echo "<br>Name: ".$bird1->name;
  echo "<br>Legs: ".$bird1->leg;
  echo "<br>Color: ".$bird1->color;
  echo "<br>Fly: ".$bird1->canfly;
  echo "<br>Food: ".$bird1->eat("meat");


