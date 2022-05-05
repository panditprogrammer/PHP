<?php
require_once "conn.php";

$sql = "SELECT * FROM phpajaxtable";

$result = mysqli_query($conn, $sql) or die("SQL query failed!");

$dataTable = "";
if (mysqli_num_rows($result) > 0) {
    $dataTable = ' <table class="table">
    <thead>
        <tr>
            <th width="100px" scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th width="100px" scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        $dataTable .= '<tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["age"] . '</td>
                        <td>' . $row["gender"] . '</td>
                        <td> <button class="btn btn-sm btn-danger deleteBtn" data-id="' . $row["id"] . '"><i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>';
    }

    $dataTable .= ' </tbody>
                </table>';


    mysqli_close($conn);
    echo $dataTable;

} else {
    echo "Record Not Found";
}
