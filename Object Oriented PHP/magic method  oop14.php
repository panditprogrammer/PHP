<?php

// magic methods - auto call based on the condition

class AllMagic
{

    public function __construct()
    {
        echo 'This is consructor function. started...<br>';
    }

    // call at the end
    public function __destruct()
    {
        echo 'This is destructor function. Done<br>';
    }


    function test(){
        echo " Working on.... <br>";
    }
}



// $am = new AllMagic();
// $am->test();
// $am->test();
// $am->test();
// $am->test();
// $am->test();
// $am->test();
// $am->test();
// $am->test();


// create autoload function - include file dynamically

function __autoload($class){
    require_once "test/". $class .".php";
}

$check = new class1();
$check = new class2();