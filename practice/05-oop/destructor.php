<?php

class Student
{
    public function __construct()
    {
        echo "Object Created <br>";
    }

    public function __destruct()
    {
        echo "Object Destroyed";
    }
}

$student = new Student();

?>