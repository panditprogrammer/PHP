<?php
$t = 10;
$num =200;

// single if statement
if ($t < $num) {
  echo "greater number is $num";
}

// if with else statement 
if($t>$num)
{
    echo "greater number is $num";

}
else
{
    echo "smaller number is $t";
}

//nested if else if 

$num1 = 205;

if($num1 > 20)
{
    echo "<br> $num1 is greater than 20";
}
else if($num1 < 20)
{
    echo "<br> $num1 is smaller than 20";
}
else
{
    echo "<br> $num1 is equal to 20";
}

?>