<?php
abstract class Animal{
    abstract function eat();
}
class Dog extends Animal{
    function eat(){
        echo "eating food";
    }
}
class Bird extends Animal{
    function eat()
    {
        echo "eating rice";
    }
}

$dog=new Dog();
$dog->eat();

$sparrow=new Bird();
$sparrow->eat();