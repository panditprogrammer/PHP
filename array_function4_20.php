<?php
// array intersect function 
$arr1 = array(10=>"ruby",20=>"rahul",30=>"sonam",40=>"puja");

$arr2 = array(23=>"shubham",20=>"rahul",36=>"sonu",40=>"sachin");

echo "<br> array intersect function <pre>";
$arr3 = array_intersect($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";

// array intersect key functions 
echo "<br> array intersect with key <pre>";
$arr3 = array_intersect_key($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";

// array intersect for assosiatvie functions 
echo "<br> array intersect for associative <pre>";
$arr3 = array_intersect_assoc($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";


// array difference functions return difference 
echo "<br> array diff function <pre>";
$arr3 = array_diff($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";


// array difference functions return difference of key 
echo "<br> array diff_key function <pre>";
$arr3 = array_diff_key($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";

// array difference functions for associative return difference of key 
echo "<br> array diff for associative <pre>";
$arr3 = array_diff_assoc($arr1,$arr2);
print_r($arr3);
echo "<br>  </pre>";

// array user defined difference functions for associative return difference of key 

function compare_fun($x,$y)
{
    if($x === $y)
    return 0;
    return ($x >$y)? 1:-1;

}

echo "<br> array udiff for associative <pre>";
$arr3 = array_diff_uassoc($arr1,$arr2,"compare_fun");
print_r($arr3);
echo "<br>  </pre>";





?>