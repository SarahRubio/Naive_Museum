<?php include "config.php"; ?>
<?php include "contenu.php"; ?>
<?php include $_dossier_template . "include/head.php"; ?>

  <body class="bgBlue">

    <div class="bgWhite marg10">

      <?php include $_dossier_template . "include/header.php"; ?>

      <div class="container">
        <?php include $_dossier_template . "include/navigation.php"; ?>
      </div>

      <main class="padtopbot10 paddinglr10">
        <h2 class="font2 padbot3 fontBlue">Ressources</h2>
        <div class="tjustify lineheight15 padbot3">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>

        <h3 class= "padbot3 underline">Nos artistes :</h3>

        <div class="artisteChoice">
          <ul>
              <?php

                #foreach ($contenuSite["artistes"] as $key => $valeur) {
                  #echo "<li><a href='artiste.php?artisteChoisi=$key'>✒︎ $key</a></li>";
                #}

              ?>
          </ul>
        </div>

      </main>

      <?php include $_dossier_template . "include/footer.php"; ?>

    </div>


  </body>
</html>
