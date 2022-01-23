<?php

$str = "hello World , I am php dev in the world";;

echo "<br>substr(str,start,len) - return string  <br>";

echo substr($str,5,);
echo "<br>";
echo substr($str,5,10);

// echo "<br> str_replace(find,replace,string) <br>";
// echo str_replace("world","round",$str);

// echo "<br> str_replace(find,replace,string) <br>";
// echo str_replace("world","round",$str);

echo "<br> str_replace in array <br>";
$ar = ["I","we","you","you"];
// echo "<pre>";
// print_r(str_replace("you","I",$ar));

// echo "<br> substr_replace(string,find,start,len)  <br>";
// echo substr_replace($str,"php",4);

echo "<br> strtr(str,find,replace) <br>";
echo strtr($str,"eo","iu");