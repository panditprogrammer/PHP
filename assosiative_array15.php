<?php

// assosiative array 

$name = array("ruby"=>100,"shubham"=>200,"prity"=>300,"rahul"=>400);

// accessing using index 

echo "<br> $name[ruby]";
echo "<br> $name[prity]";
echo "<br> $name[rahul]";

echo"<br> using for each loop ";

foreach ($name as $marks ) {
    echo "<br> $marks";
}

$name["shubham"] = "programmer";
$name["rahul"] = 50.8;

echo "<pre>";
print_r($name);
echo "</pre>";

// printing with datatypes 
echo "<pre>";
var_dump($name);
echo "</pre>";

// multidimensional assosiative array 
echo "<br> multi dimensional assosiative arrary";

$student = array(

    1=>array("ruby"=>5000),
    2=>array("deepak"=>3000),
    3=>array("sonam"=>4000),
    4=>array("prity"=>1000)

);

// printing array 
echo "<pre>";
// echo $student;
print_r($student);
echo "</pre>";


echo "<br> for each loop";

foreach ($student as $key => $value) {
    echo "<br>SN. : $key";
    foreach ($value as $i => $data) {
        echo "<br>Name : $i";
        echo "<br>Salary : $data";
    }
    echo "<br>";
}





?>