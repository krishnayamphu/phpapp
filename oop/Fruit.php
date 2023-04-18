<?php

class Fruit
{
    function __construct()
    {
        echo "Fruit object is created.";
    }

    function __destruct() {
        echo "You reach at the end";
    }

}
$fruit=new Fruit();