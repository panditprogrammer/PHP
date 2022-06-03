<?php 

// 1. interface must have only function without body 
// 2. interface can't instatiate 
// 3. after implements interface , all methods must be define in derived class


// create and implements interfaces
interface ParentInterface{
    function say($m);
    function func1();
}


interface ParentInterface1{
    function x();
}


// create class and implements interfaces 
class Test implements ParentInterface, ParentInterface1{

    function say($message){
        echo "hello World - $message <br>";
    }

    function x(){
        echo "This is x funtion <br>";
    }

    function func1()
    {
        echo  ' This is func1 <br>';
    }
}


$t = new Test();

$t->say("php");
$t->x();



