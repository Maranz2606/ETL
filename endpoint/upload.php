<?php
session_start();
$_SESSION["fileName"] = $_FILES["fileToUpload"]["name"];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = TRUE;
$fileExt = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// TO:DO Check if file is actual Excel 

echo '<pre>';
if( $fileExt == "xls" ||  $fileExt == "xlsx"){
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo "File is valid, and was successfully uploaded.\n";
        header("Location: ./SelectRule.html");
    } else {
        echo "Possible file upload attack!\n";
    }
} else {
    echo "file not allowed\n";
}

//print_r($_FILES);




?>