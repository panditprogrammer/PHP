<?php
require_once "database.php";

$query = new Query();

// global variables
$name = "";
$age = "";
$mobile = "";
$date = "";
$id_for_edit = "";

// get id from url 
if (isset($_GET['id']) && $_GET['id'] != "") {

    $id_for_edit = $query->getSafeString($_GET['id']);
    $condition = array("id" => $id_for_edit);
    $result = $query->getData("user", "*", $condition);
    // fetch the data from database 
    $name = $result[0]['name'];
    $age = $result[0]['age'];
    $mobile = $result[0]['mobile'];
    $date = $result[0]['admited'];
}

// insert the data 
if (isset($_POST['submit'])) {

    $name = $query->getSafeString($_POST["name"]);
    $age = $query->getSafeString($_POST["age"]);
    $mobile = $query->getSafeString($_POST["mobile"]);
    $date = $query->getSafeString($_POST["date"]);

    $condition = array("name" => "$name", "age" => $age, "mobile" => $mobile, "admited" => $date);

    if ($id_for_edit == "") {
        $query->insertData("user", $condition);
        echo '<div class="alert alert-success alert-dismissible fade show text-center container" role="alert">
        <strong> Saved successfully !</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    } else {
        $query->updateData("user", $condition, "id", $id_for_edit);
        header("location:index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Insert and Update</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Fill this form</h1>
            <div class="col-md-6">
                <form action="" method="post">
                    <input type="text" name="name" id="name" value="<?php echo $name ?>" class="form-control my-2" placeholder="Enter name">
                    <input type="number" name="age" id="age" value="<?php echo $age ?>" class="form-control my-2" placeholder="Enter Age">
                    <input type="tel" name="mobile" id="mobile" value="<?php echo $mobile ?>" class="form-control my-2" placeholder="Enter Mobile No.">
                    <input type="date" name="date" id="date" value="<?php echo $date ?>" class="form-control my-2" placeholder="Enter date">
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                </form>
            </div>
            <div class="col-md-12 my-5">
                <a href="/" class="btn border text-dark">Show Data</a>
            </div>
        </div>

    </div>

     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>