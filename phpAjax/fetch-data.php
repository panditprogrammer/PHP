<?php
require_once "conn.php";

$sql = "SELECT * FROM phpajaxtable";

$result = mysqli_query($conn, $sql) or die("SQL query failed!");

$dataTable = "";
if (mysqli_num_rows($result) > 0) {
    $dataTable = ' <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
        </tr>
    </thead>
    <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        $dataTable .= '<tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["name"] . '</td>
                        <td>' . $row["age"] . '</td>
                    </tr>';
    }

    $dataTable .= ' </tbody>
                </table>';


    mysqli_close($conn);
    echo $dataTable;

} else {
    echo "Record Not Found";
}
