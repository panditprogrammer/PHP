<?php
// array sorting function 

$books = ["java","python","cpp","php","javascript"];
sort($books);

echo "sort function <br><pre>";
print_r($books);
echo "</pre>";
echo " reversed sort function <br><pre>";
rsort($books);
print_r($books);
echo "</pre>";

// sort function 
$num = [1,8,2,9,4,5,2,9,0];
sort($num);
echo "sort function <br><pre>";
print_r($num);
echo "</pre>";

// sort reverse function 
rsort($num);
echo " reverse sort function <br><pre>";
print_r($num);
echo "</pre>";

$books = array("programming"=>"php",
                "story"=>"The Secret",
                "sci-fi"=>"The universe",
            "medical"=>"human");

// reverse order sort function 
rsort($books);
echo "assoc reverse sort function <br><pre>";
print_r($books);
echo "</pre>";

// sort function 
sort($books);
echo " assoc sort function <br><pre>";
print_r($books);
echo "</pre>";


$book = array("programming"=>"php",
                "story"=>"The Secret",
                "sci-fi"=>"The universe",
            "medical"=>"human");

// asort function with associative array 
echo "associative array sort function <br><pre>";
asort($book);
print_r($book);
echo "</pre>";

// arsort reverse  sort  function 
echo "associative array reverse sort function <br><pre>";
arsort($book);
print_r($book);
echo "</pre>";


$b = array("programming"=>"php",
                "story"=>"The Secret",
                "sci-fi"=>"The universe",
            "medical"=>"human");

            // ksort sort function sorting key of array  
echo "associative array sort with key function <br><pre>";
ksort($book);
print_r($book);
echo "</pre>";

// kr sort function  with reversed function
echo "associative array reverse sort with key function <br><pre>";
krsort($book);
print_r($book);
echo "</pre>";

// natsort function  function for with string and integer mixer
echo "special type of sort natsort function for with string and integer mixer <br>";
$arr = array("pass123","soni868","mek43","pass9839","py343");

natsort($arr);
echo "natural sorting function <br> <pre>";
print_r($arr);
echo "<pre>";

// natcasesort function case sensitive function for with string and integer mixer
echo "special type of sort natcasesort  case sensitive function for with string and integer mixer <br>";
$arr = array("pass123","soni868","mek43","Pass9839","py343","Sonam87");

natcasesort($arr);
echo "natural sorting function with case sensitive <br> <pre>";
print_r($arr);
echo "<pre>";


// array multisort sorting multiple sort 
// both array size should be same 
echo 'array multisort function <br>';
$array1 = [234,98,902,335,854,239,492];
$array2 = [2,8,9,2,3,7,4];
array_multisort($array1,$array2);
echo "<br><pre>";
print_r($array1);
print_r($array2);
echo "</pre>";

// array_multisort reverse function returning new array
echo "array_reverse function <br>";
$arr_rev = ["python","java","php","ruby","c++","html","javascript"];
$newar = array_reverse($arr_rev);
echo "<pre>";
print_r($newar);
echo "</pre>";


?>