<?php

$arr = array("python"=>1000,"java"=>2000,"cpp"=>1300);

array_walk($arr,"fun1");
function fun1($Value,$key)
{
    echo "Value is $Value and key is $key<br>";
}


array_walk($arr,"fun2", " value of this key");
function fun2($Value,$key,$desc)
{
    echo "$Value $desc $key<br>";
}

?>