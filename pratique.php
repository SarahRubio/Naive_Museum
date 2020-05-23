<?php include "config.php" ?>
<?php include "contenu.php" ?>
<?php include $_dossier_template . "include/head.php" ?>

  <body class="bgBlue">

    <div class="bgWhite marg10">

      <?php include $_dossier_template . "include/header.php" ?>

      <div class="container">
        <?php include $_dossier_template . "include/navigation.php"; ?>
      </div>

      <main class="padtopbot10 paddinglr10">
        <h2 class="font2 padbot10 fontBlue tcenter">Infos Pratiques</h2>

         <div class="adress padbot5">
           <h3 class="padbot1 underline maj bold fontBlue">Adresse :</h3>
           <p class="lineheight15 bold league maj"><?php echo $nom_du_musee; ?></p>
           <p class="lineheight15"><?php echo $contenuSite["adresse"]["rue"] . " " . $contenuSite["adresse"]["ville"]; ?></p>
           <p class="lineheight15"><?php echo $contenuSite["adresse"]["tel"]; ?></p>
         </div>

         <div class="acces padbot5">
           <h3 class="padbot1 underline maj bold fontBlue">Accès :</h3>
           <p class="lineheight15">Métro : <a href="<?php echo $contenuSite["adresse"]["acces"]; ?>">Oberkampf/Parmentier</a></p>
         </div>

         <div class="ouverture padbot5">
          <h3 class="underline maj padbot1 bold fontBlue">Horaires d'ouverture :</h3>
           <p class="lineheight15"><?php echo $contenuSite["ouverture"]["jours"]; ?></p>
           <p class="lineheight15"><?php echo $contenuSite["ouverture"]["heures"]; ?></p>
         </div>

         <div class="">
           <h3 class="underline maj padbot3 bold fontBlue">Plan d'accès :</h3>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2423.2122180563097!2d2.380330161670075!3d48.86084654351017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfcec02efc3%3A0xe54873e4baffa22d!2s110%20Boulevard%20Richard-Lenoir%2C%2075011%20Paris!5e1!3m2!1sfr!2sfr!4v1590242369602!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
      </main>

      <?php include $_dossier_template . "include/footer.php" ?>

    </div>
  </body>
</html>
