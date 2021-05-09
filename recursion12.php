<?php

// recursion  function calling iteself 
$n = 7;

function fact($f)
{
    if($f==1)
    return 1;
    else
    return ($f * fact($f-1));
}

// calling function 

echo fact($n);


?>