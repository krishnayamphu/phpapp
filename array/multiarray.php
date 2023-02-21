<?php
$person=array(
    array("Ram",20),
    array("Hari",22)
);

for($i=0; $i<2; $i++){
    for($j=0; $j<2; $j++){
        echo $person[$i][$j]. " ";
    }
    echo "<br>";
}
