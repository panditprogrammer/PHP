<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Form data to json file in php </title>
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <h1>HTML Form to JSON file data saved in php </h1>

        <form id="insertForm" method="POST" action="<?php $_SERVER["PHP_SELF"]; ?>" class="row">
            <div class="col-md-6 my-2">
                <input type="text" class="form-control" name="name" id="name" placeholder="First name">
            </div>
            <div class="col-md-6 my-2">
                <input type="number" min="14" name="age" class="form-control" id="age" placeholder="Age">
            </div>
            <div class="col-md-6 my-2">
                <select class="form-select" name="gender" id="gender">
                    <option selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="col-md-6 my-2">
                <button id="insertData" type="submit" name="submit" class="btn btn-success">Insert Data</button>
            </div>
        </form>
    </section>

</body>

</html>

<?php
if (isset($_POST["submit"]) && isset( $_POST["gender"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    if (empty(trim($name)) || empty(trim($age)) || empty(trim($gender))) {
        echo "all field are required!";
    } else {

        $fileName = "json/students.json";
        if (file_exists($fileName)) {
            $existing_data = file_get_contents($fileName);
            $existing_array_data = json_decode($existing_data, true); // get as array 
            $form_data = array(
                'name' => $name,
                'age' => $age,
                'gender' => $gender
            );

            $existing_array_data[] = $form_data; // append data 

            $json_data = json_encode($existing_array_data);

            // put data in json file 
            if (file_put_contents($fileName, $json_data)) {
                echo "appended data successfully!";
            } else {
                echo "unable to save!";
            }
        } else {
            echo "file not found!";
        }
    }
}
