<?php
include("../includes/db_connect.php");
ini_set('upload_max_filesize', '20M');
ini_set('post_max_size', '20M');
$target_dir = "../images/";
$fileName = basename($_FILES["productImg"]["name"]);
$target_file = $target_dir . $fileName;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["productImg"]["tmp_name"]);
if($check !== false) {
    $uploadOk = 1;
} else {
    $uploadOk = 0;
}
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
$msg="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
echo $msg;
$uploadOk = 0;
}
// Check file size
if ($_FILES["productImg"]["size"] > 20000000) {
    $msg="Your file should be smaller than 20MB.";
    echo $msg;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
if (move_uploaded_file($_FILES["productImg"]["tmp_name"], $target_file)) {
    $msg="The file has been added.";
} else {
    $msg="Sorry, there was an error uploading your file.";
    echo $msg;
    $uploadOk = 0;
}
}

if ($uploadOk == 1) {
    $query= "INSERT INTO products$_SESSION[LANG](name, des, img_path) VALUES ('$_POST[name]','$_POST[content]','$fileName')";
    $result = $conn->query($query);
    if ($result== true) { 
        $msg="Add product successfully";
    } else {
        $msg=mysqli_error($conn);
    }
}
if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>