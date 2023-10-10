<?php
include("../includes/db_connect.php");
$isDeleted;
foreach ($_POST["path"] as $path) {
    $fileDir = '../images/' . $path;
    // $isDeleted = unlink($fileDir);
}
foreach ($_POST["id"] as $i) {
    $query= "DELETE FROM img WHERE id='$i'";
    $result = $conn->query($query);
    if ($result== true) { 
        $msg="Deleted successfully";
    } else {
        $msg=mysqli_error($conn);
    }
}

if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
