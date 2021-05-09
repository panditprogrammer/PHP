<?php

// do while loop 
// repetion of some code 
$a = 0;
do {
    echo "<br> This is line $a";
    $a++;
} while ($a <= 10);

//while loop
// printing number upto 100
$a = 1;
echo "<br> counting number upto 100";
while($a<=100)
{
    echo " $a";
    $a++;
    if($a ==50)
    echo "<br>";
}

// for loop 
echo "<br> table of 5 ";

for ($a=0; $a <= 10; $a+=1) 
{ 
    echo "<br> ",$a*5;
}

// for each loop 

$a = array(10,20,30,40,50,60,70,80,90,100);

// accessing array using for each loop 
foreach ($a as $value) {  //element  one by one in value 
    echo " Arrary element <br> $value";
}