<?php

require_once "Database.php";

$db = new Database();

$cols = "students.id, students.name, students.email,city.cityname";
$join = "city ON students.address = city.id";
$limit = 2;
$db->select("students", $cols, $join, null, null, $limit);
$result = $db->get_result();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Object Oriented CRUD Class with MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>


    <div class="container">

    <h1 class="text-center py-4">PHP Object Oriented</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as list("id" => $id, "name" => $name, "email" => $email, "cityname" => $city)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $city; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">

        <?php $db->pagination("students", $join, null, $limit);  ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>