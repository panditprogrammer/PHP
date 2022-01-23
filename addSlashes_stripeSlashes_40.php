<?php
// *************these function are important for security
$str = "hello from 'php' world";

echo "<br> add slashes function <br>";
$s = addslashes($str);
echo "<br>after add slashes == ".$s;

echo "<br><br> strip slashes function <br>";
echo "after removed slashes == ". stripslashes($s);

// add slashes between characters or all characters
echo "<br> addcslashes () <br>";
echo "<br> world =".addcslashes($str,"wor");
// echo addcslashes($str,"a..z"); // a to z
// echo addcslashes($str,"e..k"); // e to k
// echo addcslashes($str,"A..Z"); // A to Z

echo "<br> remove slashes <br>";
$str = addcslashes($str,"he");
echo stripcslashes($str);