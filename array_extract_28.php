<?php
// extract function  
$arr = array('a'=>"python",'b'=>"java",'c'=>"php");
extract($arr);
echo "<br>value of a is $a and value of b is $b and value of c is $c ";

$a = 20;
// extract function arguments 
extract($arr,EXTR_PREFIX_ALL ,"key");
echo "<br>value of a is $key_a and value of b is $key_b and value of c is $key_c ";

extract($arr,EXTR_PREFIX_SAME ,"key_for_one");
echo "<br>value of a is $key_for_one_a and value of b is $b and value of c is $c ";

extract($arr,EXTR_SKIP);
echo "<br>value of a is $a and value of b is $b and value of c is $c ";

extract($arr,EXTR_OVERWRITE);
echo "<br>value of a is $a and value of b is $b and value of c is $c ";

echo "<br>create an array using compact function <br> ";
$name = "anjali";
$age = 20;
$phone = "phone";

// argument will be a array in compact function which is contains string 
$new_arr = compact("name","age","phone");
echo "<br><pre>";
print_r($new_arr);
echo "</pre>";


?>