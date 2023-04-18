<?php
class Animal{
    public $legs;
    public $color;
}
class Dog extends Animal{}
class Bird extends Animal{}

$dog=new Dog();
$dog->color="Brown";
$dog->legs=4;
echo "Color: ".$dog->color;
echo "<br>Legs: ".$dog->legs;

$bird=new Bird();
$bird->color="Black";
$bird->legs=2;
echo "<br>Color: ".$bird->color;
echo "<br>Legs: ".$bird->legs;