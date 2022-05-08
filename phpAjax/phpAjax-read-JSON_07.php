<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Json data using Ajax jquery</title>
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1>Read json data using jquery Ajax</h1>
    <section class="my-4">
        <table id="table" class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <!-- data gones here  -->
            </tbody>
        </table>
    </section>

</body>

<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
    let url = "https://jsonplaceholder.typicode.com/users";

    // fetch json data using ajax 
    // $.ajax({
    //     url: url,
    //     type: "GET",
    //     success: function(data) {
    //         var html = "";
    //         for (let i = 0; i < data.length; i++) {
    //             const element = data[i];
    //             html += `<tr>
    //                             <td>${element.id}</td>
    //                             <td>${element.name}</td>
    //                             <td>${element.username}</td>
    //                             <td>${element.email}</td>
    //                         </tr>`;

    //         }
    //         $("#table").append(html);
    //     }
    // });

    // get only json data 
    $.getJSON(url, function(data) {
        var html = "";
        for (let i = 0; i < data.length; i++) {
            const element = data[i];
            html += `<tr>
                                <td>${element.id}</td>
                                <td>${element.name}</td>
                                <td>${element.username}</td>
                                <td>${element.email}</td>
                            </tr>`;

        }
        $("#table").append(html);
    })
</script>

</html>