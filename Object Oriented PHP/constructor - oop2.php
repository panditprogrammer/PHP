<?php

class Person{
    // default value 
    public $name , $age ;


    // contructor with arguments and default values
    function __construct($name = "Your name ", $age= "your age")
    {
        $this->name = $name;
        $this->age = $age;
    }


    function detail(){
        echo "Name is ". $this->name. " and age is ". $this->age;
    }
}


// object with contructor function 
$person1  = new Person("Kathrine", 33);
$person2  = new Person("angela", 23);

$person1->detail();
$person2->detail();

?>