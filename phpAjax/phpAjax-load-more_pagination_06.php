<?php
// require_once "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ajax with mysql</title>

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <?php require_once "navbar.php"; ?>

    <section class="container">
        <div class="row">
            <div class="col">
                <h2>PHP Ajax Load More Pagination</h2>
            </div>
        </div>


        <div class="container">
            <table class="table" id="table">
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
                <tbody>

                </tbody>

            </table>
        </div>
        <div id="pagination">
        </div>
    </section>

</body>

<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    $(document).ready(() => {

        // get page number
        $(document).on("click", "#loadMore", function() {
            var lastPageId = $(this).data("id");
            loadData(lastPageId);
        });

        function loadData(lastPageId) {
            $.ajax({
                url: "ajax_06pagination.php",
                type: "POST",
                data: {
                    pageNo: lastPageId
                },
                success: function(data) {
                    if (data == "") {
                        $("#loadMore").attr("disabled");
                        $("#loadMore").text("Finished");
                    } else {
                        $("#loadMore").remove();
                        let tablebody = eval(data)[0];
                        let paginationBtn = eval(data)[1];
                        $("#table").append(tablebody); // set the returned data from '.php' file
                        $("#pagination").append(paginationBtn);
                    }

                }
            });
        }

        loadData();

    });
</script>

</html>