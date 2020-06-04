<?php
  require "../config.php";
  verif_connexion();
?>

<!doctype html>
<html lang="fr">

  <?php
    include "../templates/include/head.php";
  ?>

<body class="bgBlue">
  <div class="paddinglr10 tright padtop2">
    <a href="deconnexion.php" class="fontWhite">Déconnexion</a>
  </div>
  <div class="bgWhite marg10">
    <main class="padtop10">
      <h1 class="tcenter fontBlue font3 padbot3">Ma petite administration naïve</h1>
      <p class="tcenter fontBlue font1 padbot10">Modifiez ici le contenu de la page d'accueil</p>

      <form method="post" action="administration_reponse.php" enctype="multipart/form-data" class="fontBlue font15">

          <div class="padbot3 paddinglr10 flex column">
            <p class="padbot1">Votre texte :</p>
            <textarea name="montexte" type="text" rows="10" cols="33" class="borderFullBlue font1 fontBlue"><?php
            echo file_get_contents(__DIR__ . "/inscription.txt");
            ?></textarea>

          </div>


          <div class="padbot3 paddinglr10 flex column">
            <label for="file-up" class="label-file label-file-t padbot1">Joindre une image</label>
            <input type="file" name="mon_image" value="" id="file-up" class="input-file">
            <p class="preview">Aucun fichier sélectionné pour le moment.</p>
          </div>

          <div class="padbot3 paddinglr10 tcenter">
            <input type="submit" class="borderFullBlue font1 fontBlue bgWhite envoyer" placeholder="Envoyer">
          </div>

      </form>

    </main>
  </div>
  <script src="../templates/js/script.js"></script>
</body>
</html>
