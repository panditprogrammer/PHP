<?php

$arr1 = ["ruby"=>"python","rahul"=>"java","pandit"=>"CPP","you"=>"c","sonam"=>"php","rohit"=>"javascrip","ajay"=>"css"];

// array keys functions finding all keys from array 
$newArr = array_keys($arr1);
echo "<br> array keys  : array_keys functions <pre>";
print_r($newArr);
echo "<br>  <pre>";

// returning first key of the array 
echo "<br> array k array_keys_first functions <pre>";
$newArr = array_key_first($arr1);
print_r($newArr);
echo "<br>  <pre>";

// returning last key of the array 
echo "<br> array_keys_last functions <pre>";
$newArr = array_key_last($arr1);
print_r($newArr);
echo "<br>  <pre>";

// returning boolean if key exist in the array 
echo "<br> array_key_exist functions <pre>";
$newArr = array_key_exists("pandit",$arr1);
// or another function 
$newArr = key_exists("sonam",$arr1); //return true or false
print_r($newArr);

if($newArr)
echo "<br>yes key exist";
else
echo "<br>no key not exist";

echo "<br>  <pre>";



?>