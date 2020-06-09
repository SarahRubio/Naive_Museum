<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <?php include "../templates/include/head.php" ?>

  <body class="bgBlue">

  <div class="bgWhite marg10">

      <main class="padtopbot10 paddinglr10">
        <h2 class="font2 padbot10 fontBlue tcenter">Recevez la newsletter</h2>

          <form class="" action="" method="post">

              <div class="flex column lineheight15 padtopbot2">
                <label for="nom">Nom : </label>
                <input type="text" name="nom" value="" class="font1">
              </div>

              <div class="flex column lineheight15 padtopbot2">
                  <label for="prenom">Prenom : </label>
                  <input type="text" name="prenom" value="" class="font1">
              </div>

              <div class="flex column lineheight15 padtopbot2">
                <label for="email">Email : </label>
                <input type="mail" name="email" value="" class="font1">
              </div>

              <div class="flex column lineheight15 aistart padtopbot2">
                <button class="padFull1 font1 bgWhite borderFullBlue pointer hoverBgBlue" type="submit">Abonnez-vous</button>
              </div>

          </form>

          <?php
              if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"])) {
                $ajout_abonne = "INSERT INTO abonnes(nom, prenom, email) VALUES" . " ('" . $_POST["nom"] . "'," . " '" . $_POST["prenom"] . "'," . " '" . $_POST["email"] . "')";
                $bdd -> query($ajout_abonne);
                header("location:../abonne.php");
              } else {
                #echo "<p>Veuillez remplir tous les champs</p>";
              }
           ?>

    </main>

  </div>
</body>
</html>
