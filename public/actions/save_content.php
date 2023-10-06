<?php
include("../includes/db_connect.php");

$postContent="<p>".str_replace(["\r\n", "\r", "\n"],"<p>",$_POST["content"]);
$postContent=str_replace("'", "\'", $postContent);
$query= "UPDATE $_POST[table] SET $_POST[col]='$postContent' WHERE name='$_POST[name]'";
$result = $conn->query($query);
if ($result== true) { 
    $msg="Updated successfully";
} else {
    $msg=mysqli_error($conn);
}
if (session_id() == "")
    session_start();
$_SESSION["$_POST[name]"] = "$msg";
header("Location: /admin/");
?>
