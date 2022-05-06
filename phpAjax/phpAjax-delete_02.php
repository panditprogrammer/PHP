<?php
require_once "conn.php";


if ($_POST["id"]) {
    $id = $_POST["id"];

    $sql = "DELETE FROM phpajaxtable WHERE id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "0";
    }
}
