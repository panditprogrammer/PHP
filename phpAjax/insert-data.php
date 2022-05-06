<?php
require_once "conn.php";

$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];

if (strlen(trim($name)) != 0 && strlen(trim($age)) != 0 && strlen(trim($gender)) != 0) {

    $sql = "INSERT INTO phpajaxtable (name,age, gender) VALUES ('$name','$age','$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "0";
    }
} else {
    echo "0";
}
