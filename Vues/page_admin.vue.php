<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/page_admin.css">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

      <div align="center">
          <img class="bannière" src="ressources/page_admin.png" alt="Alt text"/>
      </div>

      <div class="options">

        <!-- GESTION DES UTILISATEURS DU SITE WEB -->

        <div class="catégorie">

          <p class="titre_catég"> Utilisateurs </p>

            
            <?php while($u = $utilisateurs->fetch()){ ?>

              <p class="membre"><?= $u['idUser'] ?> : <?=$u['login'] ?>
              - <?= $u['Mail'] ?></p>
              <ul class="Actions">
                <li class="Suppr"><a href="page_admin.php?delete=<?= $u['idUser']?>">Supprimer</a></li>
                <li class="Modif"><a href="page_admin.php?modifier=<?= $u['idUser']?>">Modifier</a> </li>
                <li class="Ban"><a href="page_admin.php?ban=<?= $u['idUser']?>">Bannir</a> </li>
              </ul>
            <?php } ?>
        </div>

        <!-- *********************************** -->


        <!-- GESTION DES CAPTEURS -->

        <div class="catégorie">
          <p class="titre_catég"> Capteurs </p>

            <?php while($c = $capteurs->fetch()){ ?>

              <p class="membre"><?= $c['Type'] ?> / Val : <?=$c['Valeur'] ?>
              / Seuil :  <?= $c['seuil'] ?></p>          

          <ul class="Actions">
            <li class="Del_cap"><a href="page_admin.php?delete_cap=<?= $c['idCapteur']?>">Supprimer</a> </li>
            <li class="Modif_cap"><a href="page_admin.php?modif_cap=<?= $c['idCapteur']?>">Modifier</a> </li>
          </ul>
        <?php } ?>

          <a class="Add_cap" href="add_capteur.php">Ajouter</a>

        </div>
        <!-- ******************** -->


        <!-- GESTION DU SITE -->

        <div class="catégorie">
          <p class="titre_catég"> Gestion du site </p>

          <ul class="Gestion_site">
            <li><a class="gestion_FAQ" href="FAQ.php"> Gérer la FAQ </a></li>
            <li><a class="gestion_CGU" href="CGUMentionLegales.php">Modifier les CGU </a></li>
          </ul>
          <center>
            <a class="gestion_msg" href="Messagerie.php">Gérer la messagerie interne</a>
          </center>
          

        </div>

        <!-- *************** -->

      </div>



    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>