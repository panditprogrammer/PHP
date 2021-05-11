<?php

// remove last element from array 
$arr1 = ["ruby","sonam","surbhi","shubham","rohit","bittu"];

echo "<br> array after removing last element";
array_pop($arr1);
echo "<pre>";
print_r($arr1);
echo "</pre>";

// adding element in array 

echo "<br> array after pushing element ";
array_push($arr1,"rahul");
echo "<pre>";
print_r($arr1);
echo "</pre>";

// removing element from first index of the array 
array_shift($arr1);
echo "<br> array after removing first element  : shift function";
echo "<pre>";
print_r($arr1);
echo "</pre>";

// adding element from first index of the array 
array_unshift($arr1,"panditProgrammer");
echo "<br> array after adding first element  : shift function";
echo "<pre>";
print_r($arr1);
echo "</pre>";

$arr2 = [20,40,70,60,230];

//  array  merge and array combine
$new_arr = array_merge($arr1,$arr2);
echo "<br> array after merging";
echo "<pre>";
print_r($new_arr);
echo "</pre>";

// assosiatvie array merge 

$studen0 = ["name"=>"rahul","roll"=>0,"fees"=>3000,"address"=>"delhi"];
$student1 = ["name"=>"ruby","course"=>"msc","roll"=>10,"fees"=>7000];

echo "<br> merging two array ";
$new_arr = array_merge_recursive($studen0,$student1);
echo "<br> array after merging";
echo "<pre>";
print_r($new_arr);
echo "</pre>";

$arr1 = ["prity","ritu","rohit","shubham","me"];
$arr2 = [10,20,30,40,50];

echo "<br> array after combine two array as key value pair ";
$new_arr = array_combine($arr2,$arr1);
echo "<pre>";
print_r($new_arr);
echo "</pre>";


//slicing from array 
echo "<br> array slice ";
$new_arr = array_slice($arr2,1,3);
echo "<pre>";
print_r($new_arr);
echo "</pre>";

echo "<br> array slice with existing index ";
$new_arr = array_slice($arr2,1,3,true);
echo "<pre>";
print_r($new_arr);
echo "</pre>";

echo "<br> array slice with existing index in assosiative array";
$new_arr = array_slice($studen0,1,3,true);
echo "<pre>";
print_r($new_arr);
echo "</pre>";


echo "<br> array splice removing element with index";
array_splice($arr1,3);
echo "<pre>";
print_r($arr1);
echo "</pre>";

array_splice($arr1,2,2);
echo "<pre>";
print_r($arr1);
echo "</pre>";



?>