<?php 

// method chaining - return 'this' as current object 

class MethodChain{

    public function f1(){
        echo "function 1 <br>";
        return $this; //for method chaining 
    }

    public function f2(){
        echo "function 2 <br>";
        return $this; //for method chaining 
    }

    public function f3(){
        echo "function 3 <br>";
        return $this; //for method chaining 
    }

}



$mc = new MethodChain();

$mc->f1()->f2()->f3();








?>