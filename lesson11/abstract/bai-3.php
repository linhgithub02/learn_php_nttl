<?php
abstract class Employee {
    protected $name;
    protected $salary;
    abstract public function getInformation();
}
class Manager extends Employee {
   public function __construct($name, $salary)
   {
       $this->name =$name;
       $this->salary= $salary;
   }
    public function getInformation()
    {
       return [ "Name Manager" =>$this->name, "Salary Manager" =>$this->salary];
    }
}
$manager = new Manager ("Nguyen Ling", "500$");
$manager->getInformation();
