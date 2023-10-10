<?php
ini_set('upload_max_filesize', '20M');
ini_set('post_max_size', '20M');
foreach ($_FILES["fileToUpload"]["name"] as $i=>$ar) {
  if(file_exists($_FILES["fileToUpload"]["tmp_name"][$i])) {
    $target_dir = "../images/";
    $target_file = $target_dir . $_POST['fileName'][$i];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$i]);
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
    if ($_FILES["fileToUpload"]["size"][$i] > 20000000) {
        $msg="Your file should be smaller than 20MB.";
        $uploadOk = 0;
      }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
          $msg="The files has been updated.";
        } else {
          $msg="Sorry, there was an error uploading your file.";
        }
    }
  }
}
if (session_id() == "")
  session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
