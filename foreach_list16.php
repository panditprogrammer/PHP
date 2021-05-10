<?php
// for each loop with 

$student = [
    [1,"ruby",80,78,97,69],
    [2,"rahul",86,78,66,79],
    [3,"sonam",87,70,57,69],
    [4,"ritu",67,73,93,59],
];

// printing value using for each loop as list 

foreach ($student as list($sn,$name,$hindi,$Math,$english,$science)) {
    echo "<br> $sn $name $hindi $Math $english $science";
}



?>