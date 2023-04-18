<?php

class Employee
{
    private $name;
    function __construct($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
}
$emp=new Employee("Hari");
echo $emp->getName();