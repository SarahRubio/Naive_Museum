<?php
session_start();

if (
    isset($_POST['identifiant']) &&
    isset($_POST['password']) &&
    $_POST['identifiant'] == 'admin' &&
    $_POST['password'] == 'admin'
  ){
    $_SESSION["droit_connexion"] = TRUE;
    header("location:administration.php");
    exit;
} else {
    header("location:connexion.php");
    }
 ?>
