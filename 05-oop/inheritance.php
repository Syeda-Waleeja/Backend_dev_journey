<?php

class ParentClass
{
    public function message()
    {
        echo "Hello from Parent Class";
    }
}

class ChildClass extends ParentClass
{
}

$child = new ChildClass();

$child->message();

?>