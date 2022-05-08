<?php

require_once "conn.php";

$limit = 3;
$page = "";

if (isset($_POST["pageNo"])) {
    $page = $_POST["pageNo"];
} else {
    $page = 0;
}


$sql = "SELECT * FROM phpajaxtab LIMIT $page, $limit";
$result = mysqli_query($conn, $sql) or die("SQL query failed");
$html = "";
$all = array();
if (mysqli_num_rows($result) > 0) {

    // $html .= "<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {
        $lastRowId = $row["id"];
        $html .= '<tr>
        <td>' . $row["id"] . '</td>
        <td>' . $row["name"] . '</td>
        <td>' . $row["age"] . '</td>
        <td>' . $row["gender"] . '</td>
        <td> <button class="btn btn-sm btn-secondary editBtn"><i class="fa-solid fa-edit"></i></button></td>
        <td> <button class="btn btn-sm btn-danger deleteBtn"><i class="fa-solid fa-trash-can"></i></button></td>
        </tr>';
    }

    // $html .= "</tbody>";

    $html_btn =  '<button class="btn btn-success my-3" id="loadMore" data-id="'.$lastRowId.'">Load More</button>';
    $all[] = $html;
    $all[] = $html_btn;
    echo json_encode($all); // return as array
} else {
    echo "";
}
