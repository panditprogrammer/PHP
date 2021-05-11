<?php

// counting array element 

$arr1 = [1,2,3,4,5,7,10,20,40,40];

echo count($arr1);

echo "<br> length of array is ". sizeof($arr1);
echo "<br> length of array is ". count($arr1);
echo "<br> length of array is ". array_count_values($arr1);

$obj = ["laptop","mouse","computer","charger","mobile","charger","keyboard","mouse"];


echo "<pre>";
print_r(array_count_values($obj));

echo "</pre>";

// searching in array 

echo "<br> searching in array";

echo in_array("mouse",$obj);

if(in_array("charger",$obj))
echo "<br>  exist in array";
else
echo "<br>  not exist in array<br>";

echo array_search('mobile',$obj);
echo "<br> ";
echo array_search('2',$arr1);

// changing value in array replace function
echo "<br> array replace value";

$new_arr1 = array_replace($arr1,$obj);

echo "<pre>";
    print_r($new_arr1);
echo "</pre>";

$new_obj = array_replace($obj,$arr1);

echo "<pre>";
    print_r($new_obj);
echo "</pre>";



?>