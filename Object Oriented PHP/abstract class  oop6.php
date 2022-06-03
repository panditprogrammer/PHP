<?php 

// abstract class must have atleast one abstract function 
// can't used to create object of abstract class


abstract class Human{

    public $name;

    // abstract function or method
   abstract protected function details($name);

}


class Kid extends Human{

    public function details($name){
        $this->name = $name;
        echo "Name is $this->name <br>";
    }

}


$k = new Kid();

$k->details("Asian");





?>