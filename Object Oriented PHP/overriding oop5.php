<?php 

// same property or methods in derived class - overriding


class Main{

    public $age ;
    protected $name ;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show(){
        echo "name is $this->name <br>";
    }
}


class Test extends Main{
    // propery overriding 
    public $age;
    
    // function overriding 
    public function show(){
        echo "name is $this->name from Test class <br>";
    }
}


$t  = new Test("henry");

$t->show();
