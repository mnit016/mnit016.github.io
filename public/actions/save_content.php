<?php
include("../includes/db_connect.php");

$postContent="<p>".str_replace(["\r\n", "\r", "\n"],"<p>",$_POST["content"]);
$query= "UPDATE contents SET content='$postContent' WHERE name='$_POST[name]'";
$result = $conn->query($query);
if ($result== true) { 
    $msg="Updated successfully";
} else {
    $msg=mysqli_error($conn);
}
session_start();
$_SESSION["$_POST[name]"] = "$msg";
header("Location: /admin/");
?>
