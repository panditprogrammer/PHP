<?php
require_once "config.php";

if (isset($_POST["id"])) {
    $id = $_POST["id"];
    $sql = "SELECT * FROM phpajaxtab WHERE id='$id'";
} else {
    $sql = "SELECT * FROM phpajaxtab";
}

$result = mysqli_query($conn, $sql) or die("SQL query failed");

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // echo "<pre>";
    // print_r($data);

    echo json_encode($data);
}
