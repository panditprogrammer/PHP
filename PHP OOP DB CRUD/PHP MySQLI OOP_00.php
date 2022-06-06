<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "student_db";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed");
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP MYSQL CRUD OOP !</title>
</head>

<body>

<div class="container">
    <h1 class="my-4 text-center text-primary">PHP Object Oriented MYSQL CRUD </h1>
</div>

  <div class="container">
  <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>

            <?php

            $sql = "SELECT * FROM students";
            $result = $conn->query($sql);

            if ($result->num_rows) {
                while ($rows = $result->fetch_assoc()) {
            ?>

                    <tr>
                        <th scope="row"><?php echo $rows["id"]; ?></th>
                        <td><?php echo $rows["name"]; ?></td>
                        <td><?php echo $rows["email"]; ?></td>
                        <td><?php echo $rows["address"]; ?></td>
                    </tr>

            <?php
                }
            }
            $conn->close();

            ?>
        </tbody>
    </table>

  </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>