<?php

class Student
{
    //member/field
    public $name;
    public $rollno;

    //method
    function getSchoolName(){
        echo "<br>School Name: ABC School";
    }
}

/*
 * define object
 * $object_name=new ClassName();
 */

$s1=new Student();

/*
 * accessing object properties
 * $object_name->member
 * $object_name->method()
 *
 */
$s1->name="Ram";
$s1->rollno=10;

echo "Student Name: ".$s1->name;
echo "<br>Student Rollno: ".$s1->rollno;

$s1->getSchoolName();