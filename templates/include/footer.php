<?php include "contenu.php"; ?>

<footer class="padtopbot10 flex jaround aicenter bgBlue">

  <div class="navPlan">
    <p class="lineheight15 fontWhite padbot1 underline">Plan du Site :</p>
    <?php include "navigation.php" ?>
  </div>

  <div class="adress fontWhite tcenter">
    <p class="lineheight15 bold league maj"><?php echo $nom_du_musee; ?></p>
    <p class="lineheight15"><?php echo $contenuSite["adresse"]["rue"]; ?></p>
    <p class="lineheight15"><?php echo $contenuSite["adresse"]["ville"]; ?></p>
    <p class="lineheight15">Ouvert tous les jours</p>
    <p class="lineheight15">Semaine de 11h à 18h / Samedi de 11h à 19h / Dimanche de 12h à 18h</p>
  </div>

  <div class="cgu tcenter"><a href="cgu.html" class="fontWhite">CGU</a></div>

</footer>
