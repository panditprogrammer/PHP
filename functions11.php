<?php

// function in php 

// defining functions 
function fun1()
{
    echo "<br> Hello world";
    echo "<br> Hello function ";
}

// calling the functions 
fun1();

// funtions with parameters 
echo "<br> function with parameters values ";

$x= 10;
$y = 20;

function add($a,$b)
{
    $c = $a+$b;
    echo "<br> sum is $c";
}

// calling functions and passing parameters
add($x,$y);



// function with returning values 
echo " <br>function with returning values ";
function add_num($a,$b)
{
    $c = $a+$b;
    return $c;
}

// calling functions and passing parameters
echo "<br> addition is ",add($x,$y);

//function call by reference  means passing address of the variables

function function1(&$s)
{
    $s .= " your are great";
}

$str = "<br>Programmer";

// calling function with passing reference 
echo "<br> before calling functions";
echo $str;
function1($str);
echo "<br> after calling functions";
echo $str;

// assigning function into variables 
//we can assign function into variable while defining 
function square($a){

    echo "<br>square is ",$a*$a;

}

$fun_variable = "square";

// calling function 

$fun_variable(10);



?>