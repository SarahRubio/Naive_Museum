<?php include "include/head.php"?>

  <body class="bgBlue">

  <div class="bgWhite marg10">

    <?php include "include/header.php" ?>

    <div class="container">
      <?php include $_dossier_template . "include/navigation.php"; ?>
    </div>

    <main class="paddinglr10 padtopbot10">
      <div class="flex jaround aicenter padbot3">
        <div class="width500">
          <h2 class="font2 padbot3 fontBlue"><?php echo $artiste["nom"]; ?></h2>
          <div class="tjustify lineheight15">
            <?php echo $artiste["about"]; ?>
          </div>
        </div>
        <img src="<?php echo $artiste["image"]; ?>" alt="une photo">
      </div>
    </main>

    <?php include "include/footer.php" ?>

  </div>

  </body>
</html>
