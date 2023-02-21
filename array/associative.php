<?php
$emp=array("Ram"=>"20000","Hari"=>"22000","Mohan"=>"25000");
echo $emp['Ram'];
echo "<br>";
foreach($emp as $e=>$salary){
    echo "Employee's Name: ".$e;
    echo "<br>Salary: ".$salary."<br>";
}
