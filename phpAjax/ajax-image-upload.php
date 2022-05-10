<?php
// if ($_FILES["image-file"]["name"] != '') {
//     $image_file = $_FILES["image-file"];
//     $image_tmp_name = $_FILES["image-file"]["tmp_name"];
//     $fileExtension = pathinfo($image_file, PATHINFO_EXTENSION);

//     $images_supports = array("jpg", "jpeg", "png", "gif");

//     if (in_array($fileExtension, $images_supports)) {
//         // create new file name 
//         $newFileName = rand() . "-" . $fileExtension;
//         $uploadPath = "uploads/" . $newFileName;

//         if (move_uploaded_file($image_tmp_name, $uploadPath)) {
//             echo '<img src="' . $uploadPath . '" alt="profile-image" class="img-fluid">
//             <button id="delete_btn" class="btn-sm btn btn-secondary" data-path="' . $uploadPath . '">Remove Image</button>';
//         }
//     } else {
//         echo '<script> alert("File not supported"); </script>';
//     }
// }
