<?php
require("../includes/db_connect.php");

$postContent="<p>".str_replace(["\r\n", "\r", "\n"],"<p>",$_POST["content"]);
$postContent=str_replace("'", "\'", $postContent);
$query= "UPDATE products$_SESSION[LANG] SET des='$postContent', name='$_POST[name]' WHERE id='$_POST[id]'";
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
