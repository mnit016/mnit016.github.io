<?php
include("../includes/db_connect.php");

$fileDir = '../images/' . $_POST["img_path"];
$fileDir2 = '../accreditations/' . $_POST["pdf_path"];
$isDeleted = unlink($fileDir);
$isDeleted = unlink($fileDir2);

if ($isDeleted) {
    $query= "DELETE FROM accreditations WHERE id='$_POST[id]'";
    $result = $conn->query($query);
    if ($result== true) { 
        $msg="Deleted successfully";
    } else {
        $msg=mysqli_error($conn);
    }
} else {
    $msg = "something wrong, please try later or ask your admin";
}

if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
