<?php
include("db_connect.php");

$db=$conn;
$tableName="img";
$columns=['name', 'path', 'des'];
$home_main=fetch_img($db, $tableName, $columns, "type='home'");
$why_euro=fetch_img($db, $tableName, $columns, "type='why_euro'");
$intro_product=fetch_img($db, $tableName, $columns, "type='intro_product'");
$intro_facility=fetch_img($db, $tableName, $columns, "type='intro_facility'");
$partner=fetch_img($db, $tableName, $columns, "type='partner'");
$product_main=fetch_img($db, $tableName, $columns, "type='product_main'");
$product=fetch_img($db, $tableName, $columns, "type='product'");
$lab_main=fetch_img($db, $tableName, $columns, "type='lab_main'");
$lab=fetch_img($db, $tableName, $columns, "type='lab'");
$infra_main=fetch_img($db, $tableName, $columns, "type='infra_main'");
$infra=fetch_img($db, $tableName, $columns, "type='infra'");
$contact_main=fetch_img($db, $tableName, $columns, "type='contact_main'");
$contact=fetch_img($db, $tableName, $columns, "type='contact'");

function fetch_img($db, $tableName, $columns, $condition) {
    if (empty($db)) {
        $msg= "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg="columns Name must be defined in an indexed array";
    } elseif (empty($tableName)){
        $msg= "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT ".$columnName." FROM $tableName where $condition";
        $result = $db->query($query);
        if ($result== true) { 
            if ($result->num_rows > 0) {
                $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg= $row;
            } else {
                $msg= "No Data Found"; 
            }
        } else {
            $msg= mysqli_error($db);
        }
    }
    return $msg;
}


?>
