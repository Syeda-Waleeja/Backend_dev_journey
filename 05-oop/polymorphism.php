<?php

class Animal
{
    public function sound()
    {
        echo "Animal Sound";
    }
}

class Cat extends Animal
{
    public function sound()
    {
        echo "Meow";
    }
}

$cat = new Cat();

$cat->sound();

?>