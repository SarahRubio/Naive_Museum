<?php

include "config.php";
include "contenu.php";

if (isset($contenuSite["artistes"][$_GET["artisteChoisi"]])) {
  $artiste = $contenuSite["artistes"][$_GET["artisteChoisi"]];
  include $_dossier_template  . "artisteDetail.php";
}
else {
  header("Location: $_url_base");
  exit();
}
