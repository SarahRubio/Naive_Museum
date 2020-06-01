<?php include "include/head.php" ?>

  <body class="bgBlue">

    <div class="bgWhite marg10">

      <?php include "include/header.php" ?>

      <div class="container">
        <?php include $_dossier_template . "include/navigation.php"; ?>
      </div>

      <main class="padtopbot10 paddinglr10">
        <h2 class="font2 padbot3 fontBlue">Accueil</h2>
        <div class="tjustify lineheight15">
          <?php
            echo nl2br(file_get_contents(__DIR__ . "/../admin/inscription.txt"));
          ?>
        </div>
        <div class="">
          <img src="templates/images/accueil.jpg" alt="">
        </div>
      </main>

      <?php include "include/footer.php" ?>

    </div>
  </body>
</html>
