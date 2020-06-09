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
      <h1 class="tcenter fontBlue font3">Connectez-vous</h1>
      <form method="post" action="reponse_connexion.php" class="flex column aicenter padtopbot5 connected_form">
          <input type="text" name="identifiant" placeholder="Identifiant">

          <input type="password" name="password" placeholder="Mot de passe">

          <input type="submit" value="Connexion">

      </form>

    </main>
  </div>
</body>
</html>
