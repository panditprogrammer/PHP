<?php
// string encryption 
$str = "Hello World from php";

// encrypt the string 
$s = convert_uuencode($str);
echo $s ."<br>";

// decrypt the string 
echo convert_uudecode($s);