<?php
$str = "hello World from php";

echo "<br> trim() function (start or ends str) <br>";
echo trim($str,"hello");
echo "<br>";
echo trim($str,"hp");

// echo "<br> rtrim() function trim from right <br>";
// echo trim($str,"ph");

// echo "<br> ltrim() function trim from left <br>";
// echo trim($str,"ph");

// echo "<br> remove white spaces<br>";
// $str = "  hello for me ";
// echo trim($str);

echo "<br>chop function (only right side) <br>";
echo chop($str,"hellophp");