<?php
$str = "he is<b> good </b> <i>boy</i>.";

// echo  remove tag 
echo "<br> remove tags <br> ";
// echo strip_tags($str);
echo strip_tags($str,"<i>");


// wordwrap(str,width,break,cut) - function for wrapping the word
echo "<br> wordwrap <br>";
// echo wordwrap($str,4,"<br>");
echo wordwrap($str,4,"<br>",true);  // break after 4 chars