<?php
$str = "hello php";

// add padding in string -  str_pad(str,len,pad_str,Pad_type) 
echo str_pad($str,20,"*");
// // pad type 
// echo "<br> <br>". str_pad($str,20,"*",STR_PAD_BOTH);
// echo "<br> <br>". str_pad($str,20,"*",STR_PAD_LEFT);
// echo "<br> <br>". str_pad($str,20,"*",STR_PAD_RIGHT);

echo "<br> str_repeat() <br>";
echo str_repeat($str,"5");