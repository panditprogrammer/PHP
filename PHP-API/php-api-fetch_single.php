<?php
// This is api file to server only one record based on requested myid 
// POST Request API Example

require_once "config.php";

// important setting for API 
header('Content-Type: application/json');// response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites
header('Access-Control-Allow-Methods:POST ');  // allow for all websites
// get the data from request 
$requestData = json_decode(file_get_contents("php://input"),true);
$myId = $requestData["myId"];  // get the value

$sql = "SELECT * FROM phpajaxtab WHERE id = '$myId'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $jsonData = json_encode($data);
    echo $jsonData; // send response as json
} else {
    echo json_encode(array("message" => "No Record Found", "status" => false)); // response 
}
