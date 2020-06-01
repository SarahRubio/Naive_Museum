<?php
  require "../config.php";

  verif_connexion();

?>

<?php

  if(!empty($_POST["montexte"])) {
    $file = fopen("inscription.txt", "w+");

    fwrite($file, $_POST["montexte"] . PHP_EOL);

    fclose($file);
  }

?>

<!doctype html>
<html lang="fr">

  <?php
    include "../templates/include/head.php";
  ?>

<body class="bgBlue">
  <div class="bgWhite marg10">
    <main class="padtopbot10">
      <h1 class="tcenter fontBlue font3 padbot3">Ma petite administration naïve</h1>
      <p class="tcenter fontBlue font15 padbot10">Modifiez ici le contenu de la page d'accueil</p>

      <form method="post" action="administration.php" enctype="multipart/form-data" class="fontBlue font15">

          <div class="padbot3 paddinglr10 flex column">
            <p class="padbot1">Votre texte :</p>
            <textarea name="montexte" type="text" rows="10" cols="33" class="borderFullBlue font1 fontBlue"><?php
            echo file_get_contents(__DIR__ . "/inscription.txt");
            ?></textarea>

          </div>

          <div class="padbot3 paddinglr10 flex column">
            <p class="padbot1">Votre image : </p>
            <input name="mon_image" type="file" class="borderFullBlue font1 fontBlue" />
          </div>

          <div class="padbot3 paddinglr10">
            <button type="submit" class="borderFullBlue font1 fontBlue">Envoyer</button>
          </div>

      </form>

      <div class="padbot3 paddinglr10">
        <a href="deconnexion.php">Déconnexion</a>
      </div>

        <?php

          if(!empty($_FILES["mon_image"]) && $_FILES["mon_image"]["error"] == 0 ) {

              $nom_dossier_destination = "../templates/images";

              // Je fabrique le chemin de destination de mon nouveau fichier
              $chemin_dossier_destination = __DIR__ .  "/" . $nom_dossier_destination;
              $chemin_fichier_destination = $chemin_dossier_destination . "/" . "accueil.jpg";

              echo "<hr>";

              move_uploaded_file($_FILES["mon_image"]["tmp_name"], $chemin_fichier_destination);


          }

          ?>


    </main>
  </div>
</body>
</html>
