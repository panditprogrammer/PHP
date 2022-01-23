<?php

$str = "hello world. The world is very beautiful.";

// get string length 
echo "<br>string length strlen()<br>";
echo strlen($str);

// get string word length 
echo "<br>string word length str_word_count()<br>";
echo str_word_count($str);

echo "<br> string word as an array<br>";
print_r(str_word_count($str,1));

// string word start index as array 
echo "<br> string word as an array with start index<br>";
print_r(str_word_count($str,2));

// string word count
echo "<br> string word count<br>";
print_r(substr_count($str,"world"));
