<?php

// parent class 
class Main{
    protected $name ; // access from derived classs
    public function __construct($name)
    {
        $this->name = $name;
    }

    // can't accees from outside of this class
    private function details(){ 
        echo "Your name is $this->name <br>";
    }

}

// derived class 
class Base extends Main{

    public function baseDetails($name)
    {
        echo "Your name is $this->name <br>";
    }

}


// $m = new Main("Yotr");
// $m->details();


$b = new Base("neiq");





