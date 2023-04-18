<?php

class StaticDemo
{
    public static  $maxSpeed=300;
    public static function getMaxSpeed(){
        echo "<br>Maximum Speed: ".self::$maxSpeed;
    }
}

echo StaticDemo::$maxSpeed;

StaticDemo::getMaxSpeed();