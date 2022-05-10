<?php
// This is api file to update data data in database  
// POST OR GET Request API Example for search data
require_once "config.php";

// important setting for API 
header('Content-Type: application/json'); // response type 
header('Access-Control-Allow-Origin: *');  // allow for all websites

// get the data from request using post method 
// $requestData = json_decode(file_get_contents("php://input"), true);
// $search = $requestData["search"];  // get the value

// using get method 
$search = isset($_GET["search"]) ? $_GET["search"] : die();

if (empty(trim($search))) {
    echo json_encode(array("message" => "Record Not Found - You need to provide data!", "status" => false)); // response 
} else {

    $sql = "SELECT * FROM phpajaxtab WHERE name LIKE '%$search%' OR age LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo json_encode($data);
    } else {
        echo json_encode(array("message" => "Record Not Found", "status" => false)); // response 
    }
}
