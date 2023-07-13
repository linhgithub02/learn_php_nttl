<?php
abstract class Animal {
    abstract public function makeSound();
}
class Dog extends Animal {
    public function makeSound()
    {
        echo "Bark!";
    }
}
class Cat extends Animal {
    public function makeSound()
    {
        echo "Meow!";
    }
}
$animals =[new Dog(), new Cat()];
foreach ($animals as $animal)
{
    echo $animal->makeSound(). "<br> ";
}