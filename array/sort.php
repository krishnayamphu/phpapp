<?php
$num = array(100, 20, 300, 40, 50);
$emp=array("Ram","Hari","Mohan");
//sort($num);
rsort($num);
rsort($emp);
foreach ($emp as $n){
    echo $n. " ";
}


