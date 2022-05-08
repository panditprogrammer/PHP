<?php
// This is api file to update data data in database  
// DELETE Request API Example
require_once "config.php";

// important setting for API 
header('Content-Type: application/json'); // response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites
header('Access-Control-Allow-Methods: DELETE');  // allow post methods only
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Authorization, X-Requested-With');

// get the data from request 
$requestData = json_decode(file_get_contents("php://input"), true);

$id = $requestData["userid"];  // get the value

if (empty(trim($id))) {
    echo json_encode(array("message" => "Record Not Deleted - You need to provide data!", "status" => false)); // response 
} else {

    $sql = "DELETE FROM phpajaxtab WHERE id = '$id'";

    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("message" => "Successfully Deleted", "status" => true)); // send response as json
    } else {
        echo json_encode(array("message" => "Record Not Deleted", "status" => false)); // response 
    }
}
