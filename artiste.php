<?php

include "config.php";

#if (isset($contenuSite["artistes"][$_GET["artisteChoisi"]])) {
  $artisteChoisi = $_GET['artisteChoisi'];
  $artiste = $bdd -> query("SELECT * FROM artistes WHERE id_artiste = $artisteChoisi") -> Fetch();
  #$contenuSite["artistes"][$_GET["artisteChoisi"]];
  include $_dossier_template  . "artisteDetail.php";
#}
#else {
  #header("Location: $_url_base");
  #exit();
#}
