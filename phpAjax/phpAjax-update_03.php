<?php
require_once "conn.php";

if (isset($_POST["id"])) {

    $id = $_POST["id"];

    $sql = "SELECT * FROM phpajaxtab WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    $data = "";
    while ($row = mysqli_fetch_assoc($result)) {
        $genders = array("male", "female", "other");

        $data .= '<span id="closeBtn"><i class="fa-solid fa-xmark"></i></span>
    <h2>Edit Record</h2>
    <div class="col-md-12 my-2">
    <input type="text" class="form-control" value="' . $row["name"] . '" id="uname" placeholder="First name">
    <input type="hidden" value="' . $row["id"] . '" id="uid" >
    </div>
    <div class="col-md-12 my-2">
    <input type="number" min="14" class="form-control" value="' . $row["age"] . '" id="uage" placeholder="Age">
    </div>
    <div class="col-md-12 my-2">
    <select class="form-select" id="ugender">
            <option selected disabled>Select Gender</option>';

        foreach ($genders as $value) {
            if ($value == $row["gender"])
                $selected = "selected";
            else
                $selected = "";

            $data .= '<option ' . $selected . ' value="' . $value . '">' . $value . '</option>';
        }

        $data .= '</select>
    </div>
    <div class="col-md-6 my-2 mt-4">
                    <button id="updateBtn" class="btn btn-success">Update Data</button>
                    </div>';
    }

    echo $data;
}



if (isset($_POST["name"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["uid"])) {
    // update code 
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $uid = $_POST["uid"];

    if (strlen(trim($name)) != 0 && strlen(trim($age)) != 0 && strlen(trim($gender)) != 0) {
        $sql = "UPDATE  phpajaxtab SET name ='$name', age='$age', gender='$gender' WHERE id = '$uid'";

        if (mysqli_query($conn, $sql)) {
            echo "1";
        } else {
            echo "0";
        }
    } else {
        echo "0";
    }
}
