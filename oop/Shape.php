<?php

class Shape
{
    function draw(){
        echo "Drawing nothing";
    }
    function paint($color){
        echo "<br>shape is painting with ".$color." color";
    }

    function getShape(){
        return "<br>Circle";
    }
}

$shape=new Shape();
$shape->draw();
$shape->paint("red");
echo $shape->getShape();