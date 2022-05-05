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
    <style>
        #alert {
            display: none;
            position: fixed;
            right: 1rem;
            bottom: 1rem;
            min-width: 300px;
            max-width: 500px;
            padding: 1rem;
            border-radius: 0.2rem;
            font-weight: bold;

        }

        #alert:hover{
            right: auto;
        }
        
    </style>

</head>

<body>
    <?php require_once "navbar.php"; ?>
    <div id="alert" class="container"></div>
    <section class="container">
        <form id="insertForm" class="row">
            <div class="col-md-6 my-2">
                <input type="text" class="form-control" id="name" placeholder="First name">
            </div>
            <div class="col-md-6 my-2">
                <input type="number" min="14" class="form-control" id="age" placeholder="Age">
            </div>
            <div class="col-md-6 my-2">
                <select class="form-select" id="gender">
                    <option selected disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="col-md-6 my-2">
                <button id="insertData" class="btn btn-success">Insert Data</button>
            </div>
        </form>
    </section>

    <!-- fetch data  -->
    <section class="container">
        <div class="row">
            <div class="col">
                <h1>All data</h1>
            </div>
        </div>
        <div id="table"> </div>
    </section>

</body>

<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(() => {
        fetchData();
        $("#insertData").click((e) => {
            e.preventDefault();
            var Name = $("#name").val();
            var Age = $("#age").val();
            var Gender = $("#gender").val();


            if (Name.trim() === "" || Age.trim() === "" || Gender.trim() === "") {
                $("#alert").html("Unabel to insert!").slideDown().addClass("alert-danger py-2");
            } else {

                $.ajax({
                    url: "insert-data.php",
                    type: "POST",
                    data: {
                        name: Name,
                        age: Age,
                        gender: Gender
                    },
                    success: function(data) {
                        if (data == "1") {
                            fetchData();
                            $("#insertForm").trigger("reset");
                            $("#alert").html("Inserted successfully!").slideDown().removeClass("alert-danger").addClass("alert-success py-2");
                        } else {
                            $("#alert").html("Unabel to insert!").slideDown().addClass("alert-danger py-2");
                        }
                    }
                })
            }
            hideAlert();
        });

        function fetchData() {
            $.ajax({
                url: "fetch-data.php",
                type: "POST",
                success: function(data) {
                    $("#table").html(data); // set the returned data from 'fetch-data.php' file
                }
            });
        }

        function hideAlert() {
            setTimeout(() => {
                $("#alert").slideUp();
            }, 7000);
        }

        // fetch id for delete record
        $(document).on("click", ".deleteBtn", function() {

            if (confirm("Do you want to delete this record?")) {
                var Id = $(this).data("id");
                var thisElement = this;

                $.ajax({
                    url: "phpAjax-delete_02.php",
                    type: "POST",
                    data: {
                        id: Id
                    },
                    success: (data) => {

                        if (data == "1") {
                            $(thisElement).closest("tr").fadeOut();
                            $("#alert").html("Deleted Successfully!").slideDown().removeClass("alert-danger").addClass("alert-success py-2");
                        } else {
                            $("#alert").html("Unabel to Delete Record!").slideDown().addClass("alert-danger py-2");
                        }
                    }
                })
                hideAlert();

            }
        });

    });
</script>

</html>