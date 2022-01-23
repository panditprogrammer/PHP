<?php

$str = "hello World , I am php dev in the world";;

echo "<br>strstr() return string left <br>";
echo strstr($str,"World",true);

// case in-sensitive 
echo "<br>stristr() return string left string <br>";
echo stristr($str,"World",true);


echo "<br>strchr()  <br>";
echo strchr($str,"world",true);

echo "<br>strrchr() return right str <br>";
echo strrchr($str,"world");

echo "<br> strpbrk return after string <br>";
echo strpbrk($str,"w");

// echo "<br> strpbrk  <br>";
// echo strpbrk($str,"el");