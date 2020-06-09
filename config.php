<?php
session_start();

$nom_du_musee = "Le petit musée naïf";

$_dossier_template = "templates/";

$_url_base = "http://localhost:8888/naive_museum/";

# Connexion à la base de données Mysql
$serveur = 'localhost';
$utilisateur = 'root';
$motdepasse = 'root';
$nomBaseDeDonnees = "naive_museum";
$bdd = new PDO("mysql:host=$serveur;dbname=$nomBaseDeDonnees", $utilisateur, $motdepasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

# Fonction pour vérifier la connexion de l'administrateur avant l'accès à la page administration.php
function verif_connexion() {
  if(empty($_SESSION["droit_connexion"])) {
    header("location:connexion.php");
  }
}
