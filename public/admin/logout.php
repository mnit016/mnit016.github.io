<?php
   include("../includes/query_contents.php");
   session_unset();
   session_destroy();
   session_start();
   $_SESSION['redirect_url']= "/admin/";
   
   header('Location: /admin/login/');
?>