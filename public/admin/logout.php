<?php
   include("../includes/query_contents.php");
   session_unset();
   $_SESSION['redirect_url']= "/admin/";
   
   header('Location: /admin/login/');
?>