<?php

require_once "conn.php";

$limit = 3;
$page = "";

if(isset($_POST["pageNo"])){
    $page = $_POST["pageNo"];
}else{
    $page = 1;
}

$offset  = ($page -1) * $limit;

$sql = "SELECT * FROM phpajaxtab LIMIT $offset, $limit";
$result = mysqli_query($conn, $sql) or die("SQL query failed");
$html = "";

if (mysqli_num_rows($result) > 0) {
    $html .= ' <table class="table">
    <thead>
        <tr>
            <th width="100px" scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th width="80px" scope="col">Edit</th>
            <th width="100px" scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>';

    while ($row = mysqli_fetch_assoc($result)) {

        $html .= '<tr>
        <td>' . $row["id"] . '</td>
        <td>' . $row["name"] . '</td>
        <td>' . $row["age"] . '</td>
        <td>' . $row["gender"] . '</td>
        <td> <button class="btn btn-sm btn-secondary editBtn"><i class="fa-solid fa-edit"></i></button></td>
        <td> <button class="btn btn-sm btn-danger deleteBtn"><i class="fa-solid fa-trash-can"></i></button></td>
        </tr>';
    }

    $html .= '
    </tbody>
    </table>
    <div id="pagination" class="btns my-2">';

    $sql_num_rows = "SELECT * FROM phpajaxtab";
    $result_rows = mysqli_query($conn,$sql_num_rows) or die("SQL query failed!");
    $total_records = mysqli_num_rows($result_rows);
    $total_pages = ceil($total_records/$limit);



    for($i = 1; $i <= $total_pages; $i++){
       if($page == $i)
       $active = "active";
       else
       $active = "";

       $html .= '<a id="'.$i.'" class="'.$active.' btn btn-sm btn-secondary m-1">'.$i.'</a>';
    }

    $html .= '</div>';
    echo $html;

} else {
    echo "<h2>Record Not Found</h2>";
}
