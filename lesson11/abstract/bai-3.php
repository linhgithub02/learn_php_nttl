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
       return "Name Manager: " .$this->name .  "<br>Salary Manager: " .$this->salary;
    }
}
class Staff extends Employee {
    public function __construct($name, $salary)
    {
        $this->name =$name;
        $this->salary= $salary;
    }
     public function getInformation()
     {
        return "<br>Name Staff: " .$this->name .  "<br>Salary Staff: " .$this->salary;
     }
 }
$manager = new Manager ("Nguyen Ling", "5000$");
echo $manager->getInformation();
$staff = new Staff ("Nguyen Ling", "500$");
echo $staff->getInformation();
