<?php
// intersect function 
$arr1 = [298,99,23,64,290];
$arr2 = [23,98,37,64,233];

echo "<br> array intersect function <pre>";
$new_arr = array_intersect($arr1,$arr2);
print_r($new_arr);
echo "</pre>";


// array explode function 
//explode function it will convert string into arra
$str = "Hello world ,There was a bug.";

$arr_result = explode(" ",$str);
echo "<br> array explode function <pre>";
print_r($arr_result);
echo "</pre>";

// array join function or implode function  
// it will join all array's elements into a single string 
echo "<br> array implode function and join function <br>";
$result_str = implode(" ",$arr_result);

echo $result_str;




?>