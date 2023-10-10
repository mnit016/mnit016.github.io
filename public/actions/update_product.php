<?php
require("../includes/db_connect.php");

$postContent="<p>".str_replace(["\r\n", "\r", "\n"],"<p>",$_POST["content"]);
$postContent=str_replace("'", "\'", $postContent);
$query= "UPDATE products$_SESSION[LANG] SET des='$postContent', name='$_POST[name]' WHERE id='$_POST[id]'";
$result = $conn->query($query);
if ($result== true) { 
    $msg="Updated product successfully.  ";
} else {
    $msg=mysqli_error($conn);
}

if(file_exists($_FILES['productImg']['tmp_name'])) {
    $target_dir = "../images/";
    $target_file = $target_dir . $_POST['fileName'];
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
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["productImg"]["size"] > 20000000) {
        $msg="Your file should be smaller than 20MB.";
        $uploadOk = 0;
      }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["productImg"]["tmp_name"], $target_file)) {
          $msg="The files has been updated.";
        } else {
          $msg="Sorry, there was an error uploading your file.";
        }
    }
}

if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
