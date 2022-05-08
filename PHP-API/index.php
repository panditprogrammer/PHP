<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP API using Ajax j</title>
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-info">
        <h1 class="py-2">API in PHP & MYSQL with jquery Ajax</h1>

    </div>
    <div class="container my-4">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                    <th>gender</th>
                </tr>
            </thead>
            <tbody>
                <!-- data gones here  -->
            </tbody>
        </table>
    </div>

</body>
<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(() => {
            url = "select-data.php",
            // only for json data

            // $.getJSON(url, function(data) {
            //     // console.log(data);

            //     var html = "";
            //     for (let i = 0; i < data.length; i++) {
            //         const element = data[i];
            //         html += `<tr>
            //                     <td>${element.id}</td>
            //                     <td>${element.name}</td>
            //                     <td>${element.age}</td>
            //                     <td>${element.gender}</td>
            //                 </tr>`;

            //     }

            //     $("#table").append(html);
            // })


            // fetch json data 
            $.ajax({
                url: url,
                type: "POST",
                // data: {id:3},
                dataType: "JSON",
                success: function(data) {

                    var html = "";
                    for (let i = 0; i < data.length; i++) {
                        const element = data[i];
                        html += `<tr>
                                <td>${element.id}</td>
                                <td>${element.name}</td>
                                <td>${element.age}</td>
                                <td>${element.gender}</td>
                            </tr>`;

                    }

                    $("#table").append(html);
                }
            })



        });
</script>

</html>
<!-- <h2>Fetch data using php json_decode</h2> -->
<?php 
// fetch json file data using php 
$file = "data.json"; // json file path
$jsonData = file_get_contents($file);
$array_data = json_decode($jsonData,true);

// echo "<pre>";
// print_r($array_data);

?>