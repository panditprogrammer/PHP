<?php

// global variable  - variable outside of block 
//local variable = variable inside of block
$a = "<br> global variables ";  //global variable accissible from anywhere

function fun()
{
    $a = "<br> local";  //local variables not accessible outside of the block
    echo $a;
    global $a; //accessing global variable
    echo $a;

}

echo $a;
fun();

?>