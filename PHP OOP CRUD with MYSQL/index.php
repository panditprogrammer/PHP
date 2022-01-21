<?php
require_once "database.php";

$query = new Query();

// delete the data 
if(isset($_GET['type']) && ($_GET['type'] == "delete" )){
    
    $id_for_delete = $query->getSafeString($_GET['id']);
    $condition = array("id"=>$id_for_delete);
    $query->deleteData("user",$condition);
    echo '<div class="alert alert-success alert-dismissible fade show text-center container" role="alert">
        <strong> Deleted successfully !</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    
}
// get all the data 
$data = $query->getData("user","*");


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>INSERT READ UPDATE AND DELETE USING PHP OOP WITH MYSQL (PANDIT PROGRAMMER)</title>
</head>

<body>



    <!-- get the data  -->
    <div class="container">
        <h1 class="text-center bg-secondary text-white py-3 ">User Details</h1>
        <div class="row">
        <div class="col-md-6" >
        <a href="/insert.php" class="btn btn-secondary border">Add users</a>
        </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead class="bg-dark text-white">
                    <tr>
                        <td>S.N.</td>
                        <td>Name</td>
                        <td>Age</td>
                        <td>Mobile</td>
                        <td>Date</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>
                </thead>
                <tbody class="bg-default">

                    <?php
                    if (isset($data[0])) {
                        $sr = 1;
                        foreach ($data as $key_value) {
                    ?>
                            <tr>
                                <td><?php echo $sr ?></td>
                                <td><?php echo $key_value['name'] ?></td>
                                <td><?php echo $key_value['age'] ?></td>
                                <td><?php echo $key_value['mobile'] ?></td>
                                <td><?php echo $key_value['admited'] ?></td>
                                <td><a href="insert.php?id=<?php echo $key_value['id'] ?>" class="btn border text-success px-4 py-1">Edit</a></td>
                                <td><a href="?type=delete&id=<?php echo $key_value['id'] ?>" class="btn border text-danger py-1">Delete</a></td>
                            </tr>
                    <?php
                            $sr++;
                        }
                    }
                    else{
                        ?>
                        <tr><td colspan="7" style="text-align: center;" >No Data</td></tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>














<script>
setTimeout(() => {
    document.querySelector(".alert").style.display = "none";
}, 5000);
</script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>