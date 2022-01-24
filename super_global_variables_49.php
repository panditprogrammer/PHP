<?php
// this is not secure 
// $_GET - is used to get the data from another file 

// this is secure 
// $_POST - is used to get the data from another file 


// $_REQUEST - is used to get the data from another file 

// $_FILES - is used to get the files from another file 
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>super gobal variable </title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder=" name "> <br> <br>
        <input type="text" name="age" placeholder="age"><br> <br>
        <input type="file" name="myfile" id=""> <br> <br>
        <input type="submit" name="send" value="Send">
    </form>

</body>

</html>


<?php

if (isset($_POST['send'])) {
    echo $_POST['name'];
    echo $_POST['age'];

    echo "<pre>";
    var_dump($_FILES["myfile"]);
    echo "</pre>";

    $file_temp =  $_FILES["myfile"]['tmp_name'];
    $filename = $_FILES["myfile"]["name"];

    // upload file to the server 
    move_uploaded_file($file_temp, "uploaded/".$filename);
}

?>