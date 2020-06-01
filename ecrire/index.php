<h1>Ecrire un fichier</h1>


<?php

$file = fopen("inscription.txt", "a+");

fwrite($file, "sarahrubio.pro@gmail.com" . PHP_EOL);

fclose($file);

 ?>
