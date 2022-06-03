<?php

// parent class 
class Employee
{
    public $name, $age, $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function details()
    {
        echo "-----------details------------<br>";

        echo "Name is $this->name, Age is $this->age and $this->salary <br>";
    }
}


$emp1 = new Employee("satish", 22, 20000);
$emp1->details();



// child class 
class Manager extends Employee
{

    public $s1 = 1000, $totalSalary = 0;

    function details()
    {
       $this->totalSalary = $this->s1 + $this->salary; ;

        echo "----------- manager details------------<br>";

        echo "Name is $this->name, Age is $this->age and $this->totalSalary <br>";
    }
}

$m1 = new Manager("ma-name", 23, 24000);
$m1->details();
