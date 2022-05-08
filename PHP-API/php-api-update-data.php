<?php
// This is api file to update data data in database  
// POST Request API Example
require_once "config.php";

// important setting for API 
header('Content-Type: application/json'); // response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites
header('Access-Control-Allow-Methods: PUT');  // allow post methods only
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization, X-Requested-With');

// get the data from request 
$requestData = json_decode(file_get_contents("php://input"), true);

$id = $requestData["userid"];  // get the value
$name = $requestData["username"];  // get the value
$age = $requestData["userage"];  // get the value
$gender = $requestData["usergender"];  // get the value

if (empty(trim($name)) || empty(trim($age)) || empty(trim($gender))) {
    echo json_encode(array("message" => "Record Not Updated - You need to provide data!", "status" => false)); // response 
} else {

    $sql = "UPDATE phpajaxtab SET name='$name',age='$age',gender='$gender' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("message" => "Successfully Updated", "status" => true)); // send response as json
    } else {
        echo json_encode(array("message" => "Record Not Updated", "status" => false)); // response 
    }
}
