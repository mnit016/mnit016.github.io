<?php
include("../includes/db_connect.php");

$fileDir = '../images/' . $_POST["path"];
$isDeleted = unlink($fileDir);

if ($isDeleted) {
    $query= "DELETE FROM img WHERE id='$_POST[id]'";
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
