<?php
echo "handling... $_POST[fileName]";

$target_dir = "../images/";
$target_file = $target_dir . basename($_POST['fileName']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
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
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    $msg="Your file should be smaller than 10MB.";
    $uploadOk = 0;
  }
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $msg="The file ".$_POST["fileName"]. " has been updated.";
    } else {
      $msg="Sorry, there was an error uploading your file.";
    }
}

session_start();
$_SESSION["$_POST[fileName]"] = "$msg";
header("Location: /admin/");
?>
