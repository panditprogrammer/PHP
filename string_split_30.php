<?php

$str = "hello World";

$arr = str_split($str);

$arr = str_split($str,2);

echo "<pre> str_split()";
print_r($arr);


// str chunk - insert a character between
echo "chunk_split()<br>";
print_r(chunk_split($str,1,"*"));
