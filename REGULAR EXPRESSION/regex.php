<?php

// find a string in another string with regular expression
$string = "hello world! this is programmer";

// expression for checking 
$exp =preg_match("/world/",$string);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";


// checking with insensitive  case 
// expression for checking 
echo "<br> insensitive case <br>";
$exp =preg_match("/World/i",$string);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";

echo "<br> using array parameter <br>";
// array parameter 
$exp =preg_match("/World/i",$string,$arr);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// preg_match_all function to finding 
// array parameter 
$exp =preg_match_all("/o/i",$string,$arr);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// searching two or more 

echo "<br> searching two or more string <br>";
// array parameter 
$exp =preg_match_all("/World|is/i",$string,$arr);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";


// search using character set 
echo "<br> searching two or more string using character set <br>";

$exp =preg_match_all("/[wpr]/i",$string,$arr);
// check if true 
if($exp)
echo "<br>String found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";





?>