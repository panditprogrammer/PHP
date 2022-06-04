<?php 


class Main{
    private $name = "Default";
    private $roll = 0;


// print object as string 
    public function __toString()
    {
        return "Name is {$this->name} and Roll is {$this->roll}<br> Object can not be print as string!<br>";

    }


    // call before serialize an object
    public function __sleep()
    {
        // serialize only these properties 
        return array("name");
    }


    // call before unserialize an object
    public function __wakeup()
    {
        echo "unserialize an objec<br>";
    }

    // call when object as method 
    public function __invoke()
    {
        echo "calling an Object<br>";
    }

}


$m  = new Main();
// echo $m; /// print object as string 


// serialize an object 
$sm = serialize($m);
// echo $sm ;

$res = unserialize($sm);
print_r($res);


// calling an object as function 
$m();


// SOME MAGIC constants IN PHP 

// __LINE__ - return line number 

// __FILE__  - retun abosolute  path of filename 

// __DIR__ - return abosulte directory name

// __FUNCTION__ - return function in a function

// __METHOD__ - return method of class 

// __CLASS__ - return name of class 

// __NAMESPACE__ - return namespace name

// __TRAIT__ - return trait name 



?>