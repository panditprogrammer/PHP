<?php

// Late static binding is used to access derived class property a same name 

class Demo{
    protected static $name = "John";

    public function details(){
        // echo self::$name. "<br>";

        // static late binding 
        echo static::$name. "<br>";
    }
}

class Demo1 extends Demo{
    protected static $name = "Justin mervel";

}


$d = new Demo1();
$d->details();
