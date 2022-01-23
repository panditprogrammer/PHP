<?php

$str = "HellO WoRld";

// string upper case 
echo "strtoupper()<br>";
$result = strtoupper($str);
echo $result;


// string lowercase 
echo "<br>strtolower()<br>";
$result = strtolower($str);
echo $result;

// first lower case 
echo "<br>lcfirst()<br>";
$result = lcfirst($str);
echo $result;

// first upper case 
echo "<br>ucfirst()<br>";
$result = ucfirst($str);
echo $result;

// capitalized word 
echo "<br>ucwords()<br>";
$result = ucwords($str);
echo $result;
