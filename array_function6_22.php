<?php
// array sum and array product function 
$array1 = [1,3,2,4,7,9,10];

echo "<br> array sum is ";
echo  array_sum($array1);

echo "<br> array product is ";
echo  array_product($array1);

$Roll = array("ruby"=>10,"rakesh"=>90,"sonam"=>20,"sobhit"=>30,"ruby"=>70,"rahul"=>40,"ishan"=>50,"rakesh"=>90);

echo "<br> array sum is ";
echo  array_sum($Roll);
echo "<br> array product is ";
echo  array_product($Roll);

// getting random value from array 
$newarr = array_rand($Roll,2); //number of value is 2
echo "<br> array random function <pre>";
print_r($newarr);
echo "</pre>";

// suffle function 
shuffle($Roll); 
echo "<br> array shuffle function <pre>";
print_r($Roll);
echo "</pre>";

// filling array with default value 
//starting index ,number of values and value parameter
$new_array = array_fill(5,10,"hello");
echo "<br> array fill function <pre>";
print_r($new_array);
echo "</pre>";

// array fill key with default key 
//starting  array and value parameter
$array = [1,2,3,4,5,7,8,9,11];
$new_array = array_fill_keys($array,"coding");
echo "<br> array fill keys function <pre>";
print_r($new_array);
echo "</pre>";




?>