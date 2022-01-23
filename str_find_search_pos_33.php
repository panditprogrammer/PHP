<?php

$str = "I am php developer. I code in php that is awesome.";

// case sensitive 
echo "<br> string position find <br>";
echo strpos($str,"php");
echo "<br>";
// echo strpos($str,"php",10);
// echo "<br>";
// echo strpos($str,"php",-50);

// case sensitive 
echo "<br> string position find reverser order strrpos()<br>";
echo strrpos($str,"php");
echo "<br>";

// case in-sensitive 
echo "<br> string position find <br>";
echo stripos($str,"php");
echo "<br>";
// echo stripos($str,"php",10);
// echo "<br>";
// echo stripos($str,"php",-50);

// case in-sensitive 
echo "<br> string position find reverser order strripos()<br>";
echo strripos($str,"php");
echo "<br>";
