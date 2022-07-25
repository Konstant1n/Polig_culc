<?php 
  require('partials/header.php');
  if(isset($_SESSION["user_id"]) && $_SESSION["user_id"] != NULL){
    $_SESSION["user_id"] = NULL;
    header("Location: /");
  }



  if(isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != NULL){
    setcookie('user_id', '', 0, '/');
    header("Location: /");
  }


?>