<?php
require "../config.php";
verif_connexion();

# Envoi du texte
  if(!empty($_POST["montexte"])) {
    $file = fopen("inscription.txt", "w+");

    fwrite($file, $_POST["montexte"] . PHP_EOL);

    fclose($file);
  }

# Envoi de l'image
  if(!empty($_FILES["mon_image"]) && $_FILES["mon_image"]["error"] == 0 ) {

      $nom_dossier_destination = "../templates/images";

      // Je fabrique le chemin de destination de mon nouveau fichier
      $chemin_dossier_destination = __DIR__ .  "/" . $nom_dossier_destination;
      $chemin_fichier_destination = $chemin_dossier_destination . "/" . "accueil.jpg";

      move_uploaded_file($_FILES["mon_image"]["tmp_name"], $chemin_fichier_destination);
    }


header("location:administration.php");
