<?php

// array traversing 
$arr1 = array("ruby","nitin","sonam","rahul","sachin","shubham");
// printing current value at current index 
echo "<br> current value and index of pointer of array<br>";
echo current($arr1)."<br>";
echo key($arr1)."<br>";


// pos function printing position of current index /
echo "<br> current position of pointer of array<br>";
echo pos($arr1)."<br>";

// next function for pointing next item of array 
echo "next function  returning next value <br>";
echo next($arr1)."<br>";

// previous function for pointing previous item of array 
echo "previous function  returning previous value <br>";
echo prev($arr1)."<br>";

// each function printing all key and value of array 
echo "each function returning key and value of array <br>";
echo "<pre>";
print_r(each($arr1));
echo "</pre>";


//resetting the pointer position of array pointer 
echo "resetting the pointer position of array <br>";
reset($arr1);
echo current($arr1)."<br>";






?>