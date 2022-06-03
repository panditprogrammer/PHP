<?php

use test1\Test;
use test2\Test as Test2Test;

require_once "testone.php";
require_once "testtwo.php";


$t1 = new Test();
$t1->test();


$t2 = new Test2Test();
$t2->test();


?>