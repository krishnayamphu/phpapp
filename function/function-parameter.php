<?php

function sum($x, $y){
    $total=$x+$y;
    echo "<br>Total sum: ".$total;
}

function employeeInfo($name,$age){
    echo "<br>Employee name: ".$name;
    echo "<br>Employee age: ".$age;
}

sum(10,5);
sum(100,200);

employeeInfo("Ram",25);
