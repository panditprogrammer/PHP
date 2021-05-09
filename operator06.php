<?php

// operators 

// string operator 
$str1 = "hello ";
$str2 = "this is programmer";

// concatenation 
echo "<br>".$str1.$str2;

// Arithmetic operators

$x = 100;
$y = 200;

echo "<br> sum is = ",$x+$y;
echo "<br> sub is = ",$x-$y;
echo "<br> div is = ",$x/$y;
echo "<br> multi is = ",$x*$y;


// assignment operator

/*
' = ' this is called assgnment operator

*/
$x = "hello"; //assigning value to the variable
echo $x;


//comparison operator
/*
>,<,==,>=,=< 

*/
//comparing two variables
echo "<br>",$x>$y;
echo "<br>",$x<$y;
echo "<br>",$x==$y; //comparing value
echo "<br>",$x===$y; //comparing data type and value

var_dump($x<$y);
var_dump($x>$y);
var_dump($x==$y);
var_dump($x===$y);

//logical operators
echo "<br>and ",$x and $y;
echo "<br> or ",$x or $y;
echo "<br> && ",$x && $y;
echo "<br> || ",$x || $y;
echo "<br> ! ",!$x;

//conditional operators or ternary operator

echo "<br> conditional operator",$x > $y? $x:$y;  //select left if true else select right


?>