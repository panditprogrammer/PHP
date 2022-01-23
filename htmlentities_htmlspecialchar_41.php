<?php
$str = '<a href="http://panditprogrammer.com">click me</a>';

// echo "<br> htmlentities <br>";
// echo $str ." after ".htmlentities($str);

echo "<br> htmlentities(str,ENT_QUOTES) <br>";
// echo htmlentities($str,ENT_QUOTES);
// echo htmlentities($str,ENT_NOQUOTES);

// decode the htmlentities 
// echo "<br> decode the html entity <br>";
// $s = htmlentities($str);
// echo html_entity_decode($s);


// echo "<br> html special characters <br>";
// echo htmlspecialchars($str,ENT_QUOTES);

// echo "<br> decode htmlspecialchars<br>";
// $s = htmlspecialchars($str,ENT_QUOTES);
// echo htmlspecialchars_decode($s);

// print all html entities table
echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";