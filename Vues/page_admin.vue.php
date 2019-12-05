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
        <div class="catégorie">
          <ul>
            <?php while($u = $utilisateurs->fetch()){ ?>
              <li><?= $u['idUser'] ?> : <?=$u['login'] ?>
              - <?= $u['Mail'] ?></li>
              <li class="liAction"><a href="page_admin.php?delete=<?= $u['idUser']?>">Supprimer</a></li>

            <?php } ?>
          </ul>
        <!--   <ul class="actions">

            <li class="liAction"><?php<a href="index.php">Ajouter</a>?></li>
            <li class="liAction"><a href="page_admin.php?delete=1>">Supprimer</a></li>
            <li class="liAction"><a href="index.php">Modifier</a></li>
            <li class="liAction"><a href="index.php">Bannir</a></li>



          </ul> -->

        </div>

        <div class="catégorie">
          <p>Gestion des capteurs</p>

        </div>

        <div class="catégorie">
          <p>FAQ/CGU + Messagerie interne</p>
          

        </div>

      </div>



    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>