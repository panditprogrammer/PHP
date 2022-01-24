<?php
// date and time function 
// echo date("d");    // 01 - 31 
// echo date("j");     // 1-31

// 3rd , 24th format  
// echo date("jS");     
// echo date("dS");     

// month name 
// echo date("F");     

//  month 01 - 12
// echo date("m");     

// month  1- 12 
// echo date("n");     

// month sort name 
// echo date("M");     

// year two digits
// echo date("y");

// year all digits 
// echo date("Y");


// date format 
// echo "full date ". date("d/m/Y");
// echo "full date ". date("Y-m-d");

//***  */ week name 
// echo date("D");   
// echo date("l");  //name 
// echo date("N");    // digit 
// echo date("w");    // digit 
// echo date("z");       // 23 d

// checking leap year in php 
// echo date("L");


// php time functions 
// echo date("h");   // hour
// echo date("H");   // hour
// echo date("g");    // hour 
// echo date("G");    // hour 


// minute 
// echo date("i");

// second 
// echo date(("s"));

// maridian 
// echo date("A");
// echo date("P");

// time format 
// echo date("h:i:sa");

// time and date 
// echo date("d-m-Y h:i:sa");


// set the time zone 
// date_default_timezone_set("Asia/Kolkata");

// check the time zone 
// echo date_default_timezone_get();

// the current date is 
// echo date("d-m-Y h:i:sa");


// past time stamp functions 
// mktime(hour,minute,second,month,day,year);
// echo date("l",mktime(0,0,0,10,1,2022));

// gmt time zone format 
// echo date("l",gmmktime(0,0,0,10,1,2022));

// create a custom date 
// $d = date_create("2022-01-22 10:0:0");

// create date with timezone 
// $d = date_create("2022-01-22 10:0:0",timezone_open("Asia/Kolkata"));

// echo date_format($d,"d/m/y H:i:sa");


// check date if valid
// echo checkdate(1,1,2022) ;


// date difference 
$d1 = date_create("2022-1-1");
$d2 = date_create("2022-1-22");
$dif = date_diff($d1,$d2);

// echo "<pre>";
// print_r($dif);
// echo "</pre>";

// get the total days 
// echo $dif->days;

// get negative or positive difference 
// echo $dif->format("%R%a days");

// only for negative value if exist 
// echo $dif->format("%r%a days");


// date calculations 
$d = date_create("2022-01-10");

// add the days in date 
// date_add($d,date_interval_create_from_date_string("10 days"));
// echo date_format($d,"d-m-Y"); // previous date + 10 days 


// subtract date 
// date_sub($d,date_interval_create_from_date_string("10 days"));
// echo date_format($d,"d-m-Y"); // previous date - 10 days 


// modify date 
// date_modify($d,"10 days");  //previous + 10 days 
// date_modify($d,"-10 days");  //previous - 10 days 
// echo date_format($d,"d-m-Y"); // previous date - 10 days 


// get the date as array 
// $d = getdate();
// echo "<pre>";
// print_r($d);
// echo "</pre>";

// echo $d['month'];
// echo $d['year'];

// gettimeofday()  
// $d = gettimeofday();
// $d = gettimeofday(true);
// echo "<pre>";
// print_r($d);
// echo "</pre>";

// echo $d["usec"];
// echo "<br>";
// echo $d["sec"];


//  localtime() on machine 
// $d = localtime();   //indexed array 
// $d = localtime(time(),true); // associative array 
// echo "<pre>";
// print_r($d);
// echo "</pre>";


// parsing the date 
// $date = date_parse("2022-01-01 12:30:10.5");
// echo "<pre>";
// print_r($date);
// echo "</pre>";
// echo $date['day'];



// parsing the date using  format 
// $date = date_parse_from_format("mmddyyyy","01012022");
// $date = date_parse_from_format("d.m.Y","1.1.2022");
// echo "<pre>";
// print_r($date);
// echo "</pre>";
// echo $date['day'];


// string time function 
// echo date("d-m-y",strtotime("now"));
// echo date("d-m-y",strtotime("3 march 2022"));
// echo date("d-m-y H:m:i",strtotime("+10 hours"));
// echo date("d-m-y H:m:i",strtotime("+1 week"));
// echo date("d-m-y H:m:i",strtotime("+1 week 10 hours 5 minutes"));

// echo strftime("%B %d %Y, %X %Z");

// past time 
// echo strftime("%B %d %Y, %X %Z",mktime(10,30,25,01,01,2022));
// past time as gmt format 
// echo gmstrftime("%B %d %Y, %X %Z",mktime(10,30,25,01,01,2022));


// date and time set function 
// date_time_set(obj,hour,min,sec,misec);
// $d = date_create("2022-01-01");
// date_time_set($d,13,0);

// echo date_format($d,"d-m-Y H:m:s");

// set and get timezone 
// date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get();

// set and get timezone using another way 
$t = timezone_open("Asia/Kolkata");
// echo timezone_name_get($t);

// get latitude and longitude of timezone 
echo "<pre>";
// print_r(timezone_location_get($t));
echo "</pre>";


// timezone timezone_identifiers_list 
echo "<pre>";
// print_r(timezone_identifiers_list());
print_r(timezone_identifiers_list(16));
echo "</pre>";


