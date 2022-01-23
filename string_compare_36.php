<?php
$str1 = "hello World";
$str2 = "hello world from php.";

// case sensitive 
echo "<br> strcmp() <br>";
echo strcmp($str1,$str2);

// case in-sensitive 
// echo "<br> strcasecmp() <br>";
// echo strcasecmp($str1,$str2);

// echo "<br> substr_compare(str1,str2,start,end,case) <br>";
// echo substr_compare($str1,$str2,2);


echo "<br> strnatcmp() <br>";
// echo strnatcmp("php1","PHp2");
// echo strnatcasecmp("php1","php2");

// match in string
echo similar_text("Hello World","hello world");
echo "<br>";
// match in string with percentage
echo similar_text("Hello World","hello world",$p);
echo "<br>";

echo $p;

