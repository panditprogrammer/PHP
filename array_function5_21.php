<?php
$Roll = array("ruby"=>10,"rakesh"=>90,"sonam"=>20,"sobhit"=>30,"ruby"=>70,"rahul"=>40,"ishan"=>50,"rakesh"=>90);

// array values function return new index array 
$newarr = array_values($Roll);
echo "<br> array values function<pre> ";
print_r($newarr);
echo "<br> array </pre>";


// array unique function return new index array 
$newarr = array_unique($Roll);
echo "<br> array unique function<pre> ";
print_r($newarr);
echo "<br> array </pre>";

//multidimensional array 
$stu = array(
    array("name"=>"ruby","email"=>"ruby@gmail.com","course"=>"ruby"),
    array("name"=>"sonam","email"=>"sonam@gmail.com","course"=>"cpp"),
    array("name"=>"rahul","email"=>"rahul@gmail.com","course"=>"python"),
    array("name"=>"deepak","email"=>"deepak@gmail.com","course"=>"java"),
);

$newarr = array_column($stu,"name");
echo "<br> array column function<pre> ";
print_r($newarr);
echo "<br> array </pre>";

// extracting data and making new array 
$newarr = array_column($stu,"name","email");
echo "<br> array column function<pre> ";
print_r($newarr);
echo "<br> array </pre>";

// array chunk function create two pair 
$newarr = array_chunk($stu,2);
echo "<br> array_chunk function<pre> ";
print_r($newarr);
echo "<br> array </pre>";


// array flip function change key as value 
$newarr = array_flip($Roll);
echo "<br> after flipping <pre> ";
print_r($newarr);
echo "<br> array </pre>";

// array changing case of array 
$newarr = array_change_key_case($Roll,CASE_UPPER);
echo "<br> after change case <pre> ";
print_r($newarr);
echo "<br> array </pre>";


?>