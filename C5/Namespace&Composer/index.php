<?php
ini_set("display_errors","1");
error_reporting(E_ALL);
include "vendor/autoload.php";

//include "University/Teacher.php";
//include "University/Student.php";
use App\Teacher;
use App\Student;
use App\CSE\ClassRoom;

//$teacher = new \University\Teacher();
//$student = new \University\Student();

$student = new Student();
$teacher = new Teacher();
$Room = new ClassRoom();

echo "Index File<br>";