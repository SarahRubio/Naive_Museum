<?php

$resultadresse = $bdd -> query("SELECT * FROM adresse WHERE id_adresse = 1") -> Fetch();
$resultouverture = $bdd -> query("SELECT * FROM ouverture WHERE id_ouverture = 1") -> Fetch();

?>

<footer class="padtopbot10 flex jaround aicenter bgBlue">

  <div class="navPlan">
    <p class="lineheight15 fontWhite padbot1 underline">Plan du Site :</p>
    <?php include "navigation.php" ?>
  </div>

  <div class="adress fontWhite tcenter">
    <p class="lineheight15 bold league maj"><?php echo $nom_du_musee; ?></p>
    <p class="lineheight15"><?php echo $resultadresse["rue"]; ?></p>
    <p class="lineheight15"><?php echo $resultadresse["ville"]; ?></p>
    <p class="lineheight15"><?php echo $resultouverture["jours"]; ?></p>
    <p class="lineheight15"><?php echo $resultouverture["heures"]; ?></p>
  </div>

  <div>
    <div class="newsletter tcenter"><a href="admin/abonnement_newsletter.php" class="fontWhite lineheight15">Newsletter</a></div>
    <div class="cgu tcenter"><a href="cgu.html" class="fontWhite lineheight15">CGU</a></div>
  </div>

</footer>
