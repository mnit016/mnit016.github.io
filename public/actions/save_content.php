<?php
include("../includes/db_connect.php");

$postContent="<p>".str_replace(["\r\n", "\r", "\n"],"<br/>",$_POST["content"]);
$postContent=str_replace("'", "\'", $postContent);
$query= "UPDATE contents$_SESSION[LANG] SET content='$postContent' WHERE name='$_POST[name]'";
$result = $conn->query($query);
if ($result== true) { 
    $msg="Updated successfully";
} else {
    $msg=mysqli_error($conn);
}
if (session_id() == "")
    session_start();
$_SESSION["msg"] = "$msg";
header("Location: /admin/");
?>
