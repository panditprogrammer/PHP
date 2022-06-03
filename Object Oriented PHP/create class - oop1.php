<?php 

// create a class 
class Calculator{
    // create property (variables)
    public $a, $b, $c;

    // create methods (functions)
    function add(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c = $this->a * $this->b;
        return $this->c;
    }
    function div(){
        $this->c = $this->a / $this->b;
        return $this->c;
    }

}

// create object 
$calc1 = new Calculator();

$calc1->a = 20;
$calc1->b = 10;

echo $calc1->add(). "<br>";
echo $calc1->sub(). "<br>";
echo $calc1->mul(). "<br>";
echo $calc1->div(). "<br>";

?>