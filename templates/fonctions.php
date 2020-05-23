<!DOCTYPE html>
<html>
<head>
    <title>Jour 5</title>
    <style>
        body {
            text-align: left;
            padding-left: 20px;
        }

        nav a{
            border:1px #ccc solid;
            padding: 3px 10px;
            text-decoration: none;
            background-color: #eee;
            color-adjust: #000;
            margin-right: 10px;
        }

        h1 {
            background: #ccc;
            padding: 10px;
        }

        h2 {
            border-bottom:1px #ccc dotted;
            border-top:1px #ccc dotted;
            margin-top: 40px;
            padding: 20px 0 5px;
        }

    </style>
</head>

<body>

<h1>Les fonctions</h1>


<h2>petit flashback</h2>

<?php

    // retour sur la fonction strpos()

    echo strpos("ddddd#dddddd", "#");

    //
    // retourner lire la doc sur le site de php
    // https://www.php.net/manual/fr/function.strpos.php
    // il y a un avertissement à prendre en compte !
    //


?>



<h2>Les fonctions prédéfinies</h2>
<?php


// Nous avons déjà vu plusieurs fonction
//
// ecrire à quoi servent les fonctions suivantes :
//
// gettype() : savoir de quel type est une variable
// strlen($string) : savoir la longueur d'une chaine de caractère
// empty() : savoir si la valeur est vide ou égale à 0
// isset() : savoir si une valeur existe
// trim() : supprimer les espaces en début et fin de chaîne

echo "<h2>Les fonctions définies par l'utilisateur</h2>";

// un utilisateur peut ecrire ses propres fonctions
// une fonction ne peut être définie qu'une seule fois


function html_h1($titre) {
    echo "<h1>$titre</h1>";
}

html_h1("Mon titre");


function addBr($var) {
    echo $var;
    echo "<br>";
}

addBr("Plus besoin de mettre de br à la fin de ma chaine !");
addBr("Je suis à la ligne !");

// tester simplement (sans passer de paramètre)
// addBr();

##
## EXERCICE : ecrire une fonction addBrX($var, $couleur) qui écrit le contenu de $var dans une div avec une bordure de
## couleur $couleur et un padding de 10px
## si aucune couleur n'est envoyé, on met la couleur red par default
##

function addBrX($monParametreAAfficher, $couleur = red) {
  echo "
    <div style=\"border:10px solid $couleur; padding: 10px;\" >
    $monParametreAAfficher
    </div>
      ";
}

addbrX("Ce que je veux afficher", 'blue');


function add($val1, $val2) {
    return $val1 + $val2; // les insctructions qui suivent un return ne sont pas executer.
    echo "Je suis une ligne bien inutile !"; //
}

$resultat = add(5,10);
addBr($resultat);

function division($val1, $val2) {
    return $val1 / $val2; // les insctructions qui suivent un return ne sont pas executer.
}

$resultatDivision = division(5,10);
addBr($resultatDivision);

#
# EXERCICE
# développer une fonction nombre_de_photo() qui prend en paramètre le nombre de photos que j'ai shooté hier
# la fonction écrit en toute lettre :
# exemple : si j'appelle nombre_de_photo(5)
# on verra écrit à l'écran "hier, vous avez pris 5 photos."
#
# La particularité de cette fonction est qu'elle ne se trompe jamais !
# c'est à dire qu'elle ne fait pas de fautes de grammaires !
#
# (perso, j'ai besoin de ce genre de fonction !)
#

function nombre_de_photo($photos) {

  if(is_int($photos) &&  $photos >=0) {
    if ($photos <= 1) {
      echo " hier vous avez pris $photos photo";
    }
    else {
      echo "hier vous avez pris $photos photos";
    }
  }
  else {
    echo "Je ne vous comprends pas";
  }

}

nombre_de_photo(6);


// Dans une fonction, nous pouvons préciser le type des paramètres que nous lui passons

function dire_age(string $nom, int $age) {
    return "$nom a $age ans";
}

// essayer d'écrire $nom après la fermeture de ma fonction

addBr(dire_age("Nicolas",42));
echo "<br>";
#
# EXERCICE : modifier la fonction précédente.
# Si on s'interesse à Nicolas, retourner plutôt "Nicolas est cachottier".
# Si on ne s'interesse pas à Nicolas, continuer à retourner le résultat actuel
#

function quiEstNicolas(string $nom, int $age) {
  if($nom == 'Nicolas') {
    return "Nicolas est cachottier";
  } else {
    return "$nom a $age ans";
  }
}

echo quiEstNicolas("Simon", 56);
echo "<br>";
echo quiEstNicolas("Nicolas", 42);
echo "<br>";

// on peut avoir plusieurs return dans une même fonction.

#
# EXERCICE : ecrire une fonction est_adulte($age) qui retourne VRAI ou FAUX suivant l'age donné.
#


///////////////////////////// propagation d'une $variable /////////////////////

$chaine = "UNE CHAINE";

function ma_function_A() {
    $chaine = "La chaine de ma fonction";

    addBr("ma_function_A a été exécutée");
}

// afficher à plusieurs endroit la valeur de la variable chaine
// et constater.


////////////////////////////////// une variable comme nom de fonction ///////////

$debug = "var_dump";
$debug($chaine);
echo "<br>";
# QUELQUES FONCTIONS A DEVELOPPER

# 1 - Créer une fonction concatenationEspace(), elle prend deux arguments de type string. Elle devra retourner
#     la concatenation des deux avec un espace entre les deux.
#     ex :  argument1 = Nicolas
#           argument2 = Hennette
#           résultat = Nicolas Hennette
############
function concatenationEspace($argument1, $argument2) {
  return $argument1 . " " . $argument2;
}

concatenationEspace("Nicolas", "Hennette");
echo concatenationEspace("Nicolas", "Hennette");

# 2 - Créer une fonction quiEstLePlusGrand(), elle prend deux arguments de type int et devra retourner le plus grand
#     des deux.
#########################
function quiEstLePlusGrand($int1, $int2){
  if(is_int($int1) && is_int($int2)) {
    if ($int1 > $int2){
      return $int1;
    } else {
      return $int2;
    }
  }
  else {
    echo "Ces arguments ne sont pas des entiers";
  }
}

quiEstLePlusGrand(56, 89);
echo "<br>";

# 3 - Créer une fonction quiEstLePlusPetit(), elle prend 4 arguments de type int et devra retourner le plus petit
#     des 4.
#########################
function quiEstLePlusPetit($int1, $int2, $int3, $int4){
  if(is_int($int1) && is_int($int2) && is_int($in3) && is_int($int4)) {
      return min($int1, $int2, $int3, $int4);
    } else {
    echo "Ces arguments ne sont pas des entiers";
  }
}

quiEstLePlusPetit(6, 89, 28, 99);
echo "<br>";
echo quiEstLePlusPetit(6, 89, 28, 99);

# 4 - Créer une fonction validerMotDePasse(), elle prend une chaine en argument et retourne VRAI si cette chaine
#     valide les conditions suivante :
#       + elle fait au moins 10 caractères
#       + il y a au moins le caractère @
#
function validerMotDePasse($chaine){
  if (strlen($chaine) >= 10 && strpos($chaine, "@") !== false){
    return "true";
  }
  else {
    return "Ce mot de passe est trop faible";
  }
}

echo validerMotDePasse("monsupermotdepasse@");
echo "<br>";


# 5 - Créer une fonction capital() qui prend en argument une chaine et qui retourne le nom de la capitale
#       FRANCE  ===> PARIS
#       ITALIE  ===> ROME
#       ESPAGNE ===> MADRID
#       TOUT AUTRE PAYS ===> OOOPS ! JE NE SAIS PAS
#
function capital(string $monPays) {
  if ($monPays === "France"){
    return "Paris";
  }
  else if ($monPays === "Italie"){
    return "Rome";
  }
  else if ($monPays === "Espagne"){
    return "Madrid";
  }
  else {
    return "OOOPS ! Je ne sais pas.";
  }
}

echo capital("Italie");
echo "<br>";


# 6 - Créer une fonction aujourdhui() qui affiche la date du jour 15/05/2020
#
// setlocale(LC_ALL, 'fr_FR')
// date('l jS \of F Y'));
setlocale(LC_TIME, "fr_FR");
echo strftime(" %A %e %B %G ");

function aujourdhui() {
   $today = date("d/m/Y");
  return "Nous sommes le " . $today;
}
echo aujourdhui(); echo "<br>";


?>



<hr>
<?php
include("nav.php");
?>
</body>
</html>
