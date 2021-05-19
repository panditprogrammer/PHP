
<?php

$string = "1 Hello World this is coding place. 2 I am learning Regular expression in php.";
// search execpt character set 
echo "<br> searching all string except these character set with ^ operator <br>";

$exp =preg_match_all("/[^wproiae]/i",$string,$arr);
// check if true 
if($exp)
echo "<br>All Strings found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// searching with character range 
echo "<br> character range <br>";
$exp =preg_match_all("/[a-i]/i",$string,$arr);
// check if true 
if($exp)
echo "<br>All Strings found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";


// searching with character range 
echo "<br> character range with uppercase<br>";
$exp =preg_match_all("/[A-Z]/",$string,$arr);
// check if true 
if($exp)
echo "<br>All Strings found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// searching with character range finding all lowercase character except uppercase and digit
echo "<br> character range with lowercase<br>";
$exp =preg_match_all("/[^A-Z|0-9]/",$string,$arr);
// check if true 
if($exp)
echo "<br>All Strings found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

$str = "'hello world' is the first_program of programmer's life. Now student no. is 12383 and street is jiu9892.";

// searching with character range finding all lowercase character except uppercase and digit
echo "<br> special character use for finding string or digits<br>";
/*
    d = all digits
    D = except all digits
    w = all character 
    W = except all character
    s = all spaces
    S = except all spaces

    \b some char \b = boundary selecter 


*/
echo "<br> finding all digits <br>";
$exp =preg_match_all("/\d/",$str,$arr);
// check if true 
if($exp)
echo "<br>All digits found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "<br> finding all except digits<br>";

$exp =preg_match_all("/\D/",$str,$arr);
// check if true 
if($exp)
echo "<br>All digits found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "<br> finding all space<br>";

$exp =preg_match_all("/\s/",$str,$arr);
// check if true 
if($exp)
echo "<br>All space found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "<br> finding all except space<br>";

$exp =preg_match_all("/\S/",$str,$arr);
// check if true 
if($exp)
echo "<br>All except space found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "<br> finding all character<br>";

$exp =preg_match_all("/\w/",$str,$arr);
// check if true 
if($exp)
echo "<br>All character found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "<br> finding all except character<br>";

$exp =preg_match_all("/\W/",$str,$arr);
// check if true 
if($exp)
echo "<br>All  found except character.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// boundary selecter is used to find string which has white space both side 
echo "<br> boundary selecter<br>";
$exp =preg_match_all("/\bis\b/",$str,$arr);
// check if true 
if($exp)
echo "<br>boundary selecter found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";



?>