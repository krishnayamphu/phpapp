<?php

class School
{
    const SCHOOL_NAME="Aptech Computer Education";
    function getSchoolName(){
        echo "School's name: ".self::SCHOOL_NAME;
    }
}
//echo School::SCHOOL_NAME;

$school=new School();
$school->getSchoolName();
