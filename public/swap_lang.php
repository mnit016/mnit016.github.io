<?php 
session_start();

if ($_SESSION['LANG'] == '') {
    $_SESSION['LANG'] = 'vi';
} else {
    $_SESSION['LANG'] = '';
}

header('Location: /');
?>