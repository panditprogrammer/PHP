<?php
// require_once "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
<?php require_once "navbar.php"; ?>

    <section class="container">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <button id="loadData" class="btn btn-success">Fetch Data</button>
            </div>
        </div>
        <div id="table"> </div>
    </section>

</body>

<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(() => {

        $("#loadData").click(() => {
            $.ajax({
                url: "fetch-data.php",
                type: "POST",
                success: function(data) {
                    $("#table").html(data); // set the returned data from 'fetch-data.php' file
                }
            })
        });

    });
</script>

</html>