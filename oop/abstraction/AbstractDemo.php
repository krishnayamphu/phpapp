<?php

abstract class Shape{
    public function draw(){
        echo "drawing shape";
    }
}
class Circle extends Shape {

}
//$shape=new Shape();
$circle=new Circle();
$circle->draw();