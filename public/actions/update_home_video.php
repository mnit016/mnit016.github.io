<?php
include("../includes/db_connect.php");

$query= "UPDATE img$_SESSION[LANG] SET path='$_POST[url]' WHERE id='$_POST[id]'";
$result = $conn->query($query);
if ($result== true) { 
    $msg="Updated  home video url successfully";
} else {
    $msg=mysqli_error($conn);
}
if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
