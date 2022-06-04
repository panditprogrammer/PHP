<?php

// magic methods - auto call based on the condition

class AllMagic
{
    private $demo;

    public function __construct()
    {
    $this->demo = 100;
        echo 'This is consructor function. started...<br>';
    }

    // call at the end
    // public function __destruct()
    // {
    //     echo 'This is destructor function. Done<br>';
    // }

    private static function test_fun(){
        echo "private static function <br>";
    }

    function test(){
        echo " Working on.... <br>";
    }

    private static function privateFun(){
        echo " Private method <br>";
    }

    // resolve the fatal error with custom message 
    function __get($name)
    {
        echo "ERROR: This is not accessible '$name' <br>";
    }

    function __set($name, $value)
    {
        echo "The key '$name' of value '$value' can't be assign. <br>";
    }


    // handle method call error
    function __call($method, $arguments)
    {
        // call private method using this technique
        if(method_exists($this,$method)){
            call_user_func_array([$this, $method], $arguments);
        }else{
            echo " '$method' does not exist <br>";
        }
        echo "This method don't exist or undefined<br>";
    }

    // find and call private static function as defined 
    public static function __callStatic($name, $arguments)
    {
        echo "call private static methods or resolve error<br>";
    }


    // checking set variables 
    public function __isset($name)
    {
        echo isset($this->$name);
    }


    // unset the private property 
    public function __unset($name)
    {
        echo "this function will call when we are trying to unset this class using object<br>";
    }
}



$am = new AllMagic();
// $am->test();
// $am->test();
// $am->test();
// $am->test();
// $am->demo = "100";

// $am->privateFun();

echo isset($am->demo);


// create autoload function - include file dynamically
function __autoload($class){
    require_once "test/". $class .".php";
}

// $check = new class1();
// $check = new class2();



