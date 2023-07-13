<?php
abstract class Vehicle {
    abstract public function start();
}
class Car extends Vehicle {
    public function start()
    {
        return "Start Car!";
    }
}
class Motorcycle extends Vehicle {
    public function start()
    {
        return "Start Motorcycle!";
    }
}
$vehicles = [new Car(), new Motorcycle()];
foreach ($vehicles as $vehicle)
{
    echo $vehicle->start(). "<br>";
}