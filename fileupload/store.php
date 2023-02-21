<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

//return file extension

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if($imageFileType=="png" || $imageFileType=="jpg"|| $imageFileType=="jpeg"){
        $uploadOk=1;
        echo "image supported";
    }else{
        echo "not supported";
        $uploadOk=0;
    }
//    if($imageFileType!=="jpg"|| $imageFileType!=="png"){
//        echo "only jpg or png file support";
//        $uploadOk=0;
//    }

//    // Check file size
//    if ($_FILES["fileToUpload"]["size"] > 500000) {
//        echo "Sorry, your file is too large.";
//        $uploadOk = 0;
//    }
//
//    // Check if $uploadOk is set to 0 by an error
//    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//    // if everything is ok, try to upload file
//    } else {
//        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//        } else {
//            echo "Sorry, there was an error uploading your file.";
//        }
//    }
}





