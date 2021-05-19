<?php

$str = "'hello world' is the /first_program of programmer's life. Now student no. is 12383 and street is jiu9892.";

//finding character with . operator
echo "<br> . character left or right side<br>";
$exp =preg_match_all("/p./",$str,$arr);
// check if true 
if($exp)
echo "<br>found.";
else
echo "<br> String not found.";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

// finding spacial character with \ operator
// finding . in string 
echo "finding speacial character";
$exp = preg_match_all("/\./",$str,$arr);
if($exp)
echo "<br>found<br>";
else
echo "<br>not found<br>";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

echo "finding speacial character";
// finding \ in string 
$exp = preg_match_all("/\//",$str,$arr);
if($exp)
echo "<br>found<br>";
else
echo "<br>not found<br>";

// printing array 
echo "<br><pre>";
print_r($arr);
echo "</pre>";

?>