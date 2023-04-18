<?php
class Vehicle{
    function run(){
        echo "vehicle is running";
    }
}

class Toyota extends Vehicle{

    //override method
    function run(){
        echo "toyota is running";
    }
}

$toyota=new Toyota();
$toyota->run();