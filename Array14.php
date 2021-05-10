<?php

//array 

$student = array("Ruby","sumit","sonam","prity");

// accessing array using index 

echo "<br> $student[0]";
echo "<br> $student[1]";
echo "<br> $student[2]";
echo "<br> $student[3]";


// accessing array using for each loop
echo "<br> for each loop";
foreach ($student as $st) {
    echo "<br> $st";
}

// array with [] 

$roll = [1,2,3,4,5,6,7,8,9,10,100];

foreach ($roll as $r) {
    echo "<br>roll no. $r";
}

// assigning value in index 
$roll[10] = 11;

// accessing array for testing 
echo "<br> testing using print_r";

print_r($roll);

echo "<br> testing using print_r";

print_r($student);

echo "<pre>";
print_r($student);
print_r($roll);
echo "</pre>";


// multi dimensional array 
echo "<br> multi dimensional array";
$emp = [

    [1,"shubham","manager",20000],
    [2,"prity","programmer",23000],
    [3,"rahul","teacher",3200]

];

echo "<pre>";
print_r($emp);
echo "</pre>";



foreach ($emp as $i ) {
    foreach ($i as $data ) {
        echo "  ". $data;
    }
    echo "<br>";
}

// printing in table 

echo "<table border='1px' cellspacing='0' cellpadding = '5px'>";
echo "<th>SN.</th>";
echo "<th>name</th>";
echo "<th>profession</th>";
echo "<th>salary</th>";

foreach ($emp as $i ) {
    echo "<tr>";
    foreach ($i as $data ) {
        echo "<td>";
        echo "  ". $data;
        // echo "<br>";
        echo "</td>";
    }
    echo "</tr>";

    // echo "<br>";
}

echo "</table>";



?>