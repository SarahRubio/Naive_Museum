<?php

include "../config.php";

if(!empty($_SESSION["droit_connexion"])) {
  header("location:administration.php");
  exit;
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
      <h1 class="tcenter fontBlue font3">Mon Formulaire naïf</h1>
      <form method="post" action="reponse_connexion.php" class="flex column aicenter padtopbot10">
          <div class="padbot3">
              <label>Identifiant</label>
              <input type="text" name="identifiant">
          </div>

          <div class="padbot3">
              <label>Mot de passe</label>
              <input type="password" name="password">
          </div>

          <div class="part-valider padbot3">
              <button type="submit">login</button>
          </div>
      </form>

    </main>
  </div>
</body>
</html>
