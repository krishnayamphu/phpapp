<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$data=json_decode($jsonobj);
//var_dump($data);
foreach ($data as $k=>$v){
    echo $k."=".$v."<br>";
}