<?php
session_start();

$db_host = "localhost";
// $db_user = "eurofilm_admin";
// $db_pass = "sgC2MGv437Bu";
$db_user = "root";
$db_pass = "";
$db_name = "eurofilm_main";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
// Connection Check
if (!$conn) {
  $_SESSION['err_msg']="Connection failed: ". $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);
}

?>