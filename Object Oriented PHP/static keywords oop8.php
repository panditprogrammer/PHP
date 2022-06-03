<?php 

// static memeber variables or functions

//1. static keywords make the class static
// 2. static variables or methods can be used without create object using :: 
// 3. In static class we use 'self' keyword instead of 'this' keyword for class property
// 4. After derived a class we use 'parent' keyword for accessing parent class property or methods


class Main{
    public static $test = "hello world <br>";

    public static function fun(){
        echo "This is static function <br>";
        echo self::$test;
    }

    public function __construct()
    {
        self::fun();
    }

}

class Demo extends Main{


    public function __construct()
    {
        // accessing parent class method
        parent::fun();
    }

}

// access without object 
// echo Main::$test;
// Main::fun();


// $test = new Main();

$d = new Demo();













?>