<?php
$emp=array("Ram"=>20,"Hari"=>18,"Mohan"=>30);

arsort($emp);
foreach ($emp as $n=>$age){
    echo $n. "=>".$age."<br>";
}


