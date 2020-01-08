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

              <!-- On affiche tous les utilisateurs sauf celui qui est connecté -->

              <?php if($u['login']!=$_SESSION['login']){ ?>
                <p class="membre"><?= $u['idUser'] ?> : <?=$u['login'] ?>
                - <?= $u['Mail'] ?></p>
                <ul class="Actions">
                  <li class="Suppr"><a href="page_admin.php?delete=<?= $u['idUser']?>" onclick="return confirm('Etes-vous sûr de vouloir effectuer la suppresion ?');">Supprimer</a></li>
                  <li class="Modif"><a href="page_admin.php?modifier=<?= $u['idUser']?>">Modifier</a> </li>
                </ul>
              <?php } else{} ?>
            <?php } ?>
        </div>

        <!-- *********************************** -->


        <!-- GESTION DES CAPTEURS -->

        <div class="catégorie">
          <p class="titre_catég"> Capteurs </p>

            <?php while($c = $capteurs->fetch()){ ?>

              <p class="membre"><?= $c['idCapteur'] ?> - <?= $c['Type'] ?> / Val : <?=$c['Valeur'] ?>
              / Seuil :  <?= $c['seuil'] ?></p>          

          <ul class="Actions">
            
            <li class="Del_cap"><a href="page_admin.php?delete_cap=<?= $c['idCapteur']?>" onclick="return confirm('Etes-vous sûr de vouloir effectuer la suppresion ?');">Supprimer</a></li>
          
            <li class="Modif_cap"><a href="page_capteur.php?modif_cap=<?= $c['idCapteur']?>">Modifier</a> </li>
          </ul>
        <?php } ?>

          <a class="Add_cap" href="add_capteur.php">Ajouter</a>

        </div>
        <!-- ******************** -->


        <!-- GESTION DU SITE -->

        <div class="catégorie">
          <p class="titre_catég"> Gestion du site </p>

          <ul class="Gestion_site">
            <li><a class="gestion_FAQ" href="Edition_FAQ.php"> Gérer la FAQ </a></li>
            <li><a class="gestion_CGU" href="CGUMentionLegalesEdition.php">Modifier les CGU </a></li>
          </ul>
          <center>
            <a class="gestion_msg" href="Messagerie.php">Gérer la messagerie interne</a>
          </center>



          <center>

            <p class="titre_search"> Moteur de recherche </p>
            <section class="moteur_recherche">
              <div class="recherche">
                <form method="post" action="resultat_recherche.php">
                    <input type="text" name="keywords" class="champ_saisie"><br/>
                    <input type="submit" value="Rechercher" class="bouton_recherche">
                </form>
              </div>
            </section>
          </center>

        </div>

        <!-- *************** -->

      </div>
      <center>
      <div class="gest_entites">

        <p class="titre_catég"> Gestion des entités de l'application </p>

        <ul class="actions_entite">

          <li><a class="add_boitier" href="new_entite.php">Ajouter une nouvelle entité</a></li>

          <li><a class="add_boitier" href="new_boitier.php">Ajouter un nouveau boîtier</a></li>

        </ul>

      </div>
    </center>



    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>