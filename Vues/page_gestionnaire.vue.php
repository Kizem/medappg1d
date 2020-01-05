<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/page_gestionnaire.css">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

      <div align="center">
        <img class="bannière" src="ressources/page_gestionnaire.png" alt="Alt text"/>
      </div>

      <div class="options">

        <!-- MOTEUR DE RECHERCHE -->

        <div class="catégorie">
          <p class="titre_catég"> Moteur de recherche </p>
          <p class="intro"> Vous souhaitez en savoir plus à propos d'un de vos utilisateurs ? Avoir accès à ses résultats ? Ce moteur de 
          recherche est là pour vous aider ! Entrez simplement un nom ou un prénom, et une liste répondant à votre demande apparaîtra devant vous ! </p>
          <center>

            <p class="titre_search"> Entrez donc un nom ! </p>
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

        <!-- GESTION DES UTILISATEURS DU SITE WEB -->

        <div class="catégorie">

          <p class="titre_catég"> Test </p>
          <p class="intro"> Vous souhaitez programmer une session de test à une date particulière ? Cliquez sur ce bouton, remplissez le formulaire
          qui apparaîtra, puis communiquez le code de session à votre utilisateur pour lui permettre de réaliser ce test. </p>
          <a class="création_test" href="Creation_test.php">Créer une session</a>
            
        </div>

        <!-- *********************************** -->





      </div>            

    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>