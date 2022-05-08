<?php
// This is api file to insert data data in database  
// POST Request API Example
require_once "config.php";

// important setting for API 
header('Content-Type: application/json'); // response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites
header('Access-Control-Allow-Methods: POST');  // allow post methods only
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization, X-Requested-With');

// get the data from request 
$requestData = json_decode(file_get_contents("php://input"), true);

$name = $requestData["username"];  // get the value
$age = $requestData["userage"];  // get the value
$gender = $requestData["usergender"];  // get the value

if (empty(trim($name)) || empty(trim($age)) || empty(trim($gender))) {
    echo json_encode(array("message" => "Record Not Inserted - You need to provide data!", "status" => false)); // response 
} else {

    $sql = "INSERT INTO phpajaxtab (name,age,gender) VALUES ('$name','$age','$gender')";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("message" => "Successfully Inserted", "status" => true)); // send response as json
    } else {
        echo json_encode(array("message" => "Record Not Inserted", "status" => false)); // response 
    }
}
