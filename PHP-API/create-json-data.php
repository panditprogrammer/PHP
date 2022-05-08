<?php
require_once "config.php";

$sql = "SELECT * FROM phpajaxtab";
$result = mysqli_query($conn, $sql) or die("SQL query failed");

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $json_data = json_encode($data);

    // create json file 
     $filename = "data-" . date("dmY") . ".json";
     if(file_put_contents("json/".$filename,$json_data)){
         echo "data saved";
     }else{
         echo "unable to save data";
     }
}
