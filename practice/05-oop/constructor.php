<?php

class Student
{
    public $name;

    public function __construct()
    {
        $this->name = "Waleeja";
    }
}

$student = new Student();

echo $student->name;

?>