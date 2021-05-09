<?php

// continue if condition is true 
$i = 1;
echo "<br> continue statement ";

while($i < 20)
{
    $i++;
    if($i== 10)
        continue; //skip 
    echo "<br> $i";
}

// break if condition is true 
$i = 1;
echo "<br> break statement ";
while($i < 20)
{
    $i++;
    if($i== 10)
        break; //stop or exit 
    echo "<br> $i";
}


?>