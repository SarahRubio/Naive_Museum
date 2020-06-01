<?php

session_start();

  unset($_SESSION["droit_connexion"]);
  header("location:connexion.php");
  exit;
