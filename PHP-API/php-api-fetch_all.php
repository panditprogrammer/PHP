<?php
// this file is api and serve all data from database 
require_once "config.php";
// GET Request API Example 

// important setting for API 
header('Content-Type: application/json'); // response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites

$sql = "SELECT * FROM phpajaxtab";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $jsonData = json_encode($data);
    echo $jsonData;
} else {
    echo json_encode(array("message" => "No Record Found", "status" => false));
}
