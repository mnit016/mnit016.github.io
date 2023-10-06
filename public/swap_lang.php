<?php 
session_start();

if ($_SESSION['LANG'] == 'EN') {
    $_SESSION['LANG'] = 'VI';
} else {
    $_SESSION['LANG'] = 'EN';
}

header('Location: /');
?>