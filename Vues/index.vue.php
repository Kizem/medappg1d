<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/index.css">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

        <!--BODY --------------------------------- -->
        <div class="ban" align="center">
          <img class="image" src="ressources/Nos_tests.png" alt="Alt text"/>
          <div class="know_more">
            <a class="enSavoirPlus"href="session_test.php">En savoir plus</a>
          </div>
        </div>

        <div class="ban" align="center">
          <img class="image" src="ressources/ESPACE_UTILISATEUR.png" alt="Alt text"/>
          <div class="je_me_connecte">
                        <!-- En tant qu'invité, ce bouton nous redirige vers la page de connexion
              Si l'on est connectés, cela nous redirige vers l'espace de l'utilisateur -->

            <?php if(empty($_SESSION)) { ?>
            <a class="go_connex_gest" href="connexion.php ">Je me connecte</a>
            <?php } else{ ?> <a class="go_connex_gest" href="monEspace.php ">Mon espace</a>
            <?php } ?>
          </div>
        </div>

        <div class="ban" align="center">
          <img class="image" src="ressources/ESPACE_GESTIONNAIRE.png" alt="Alt text"/>
          <div class="connect_guest">

            <!-- En tant qu'invité, ce bouton nous redirige vers la page de connexion
              Si l'on est connectés, cela nous redirige vers l'espace de l'utilisateur -->

            <?php if(empty($_SESSION)) { ?>
            <a class="go_connex_gest" href="connexion.php ">Je me connecte</a>
            <?php } else{ ?> <a class="go_connex_gest" href="monEspace.php ">Mon espace</a>
            <?php } ?>
          </div>
        </div>
        
        
<!-- 
        <center>
          <div class="img_test"><a href="nos_tests.php">
            <img class="image" src="ressources/ill_test.jpg" alt="Alt text"/>

              <div class="normal">
                <div class="text">Nos tests
                </div>
              </div>
              <div class="hover">
                <div class="text">Venez en savoir plus au sujet du déroulé, des éléments de tests</div>
              </div>
          </a>
          </div>
        <br><a href=""></a><button class="boutons_accueil">En savoir plus</button></br>
        </center> -->

<!-- 
      <div class=images_down>

        <div class="img_user"><a href="connexion.php">
          <img class="image" src="ressources/ill_user.jpg" alt="Alt text"/>
            <div class="normal">
              <div class="text">Espace Utilisateur
              </div>
            </div>
            <div class="hover">
              <div class="text">Accès aux résultats de vos tests, scores et représentation graphiques</div>
            </div>
        </a>
        </div>

        <div class="img_gestionnaire"><a href="connexion.php">
          <img class="image" src="ressources/ill_gestionnaire.jpg" alt="Alt text"/>
            <div class="normal">
              <div class="text">Espace Gestionnaire
              </div>
            </div>
            <div class="hover">
              <div class="text">Accès aux données de vos utilisateurs, création de vos données de tests et accès à notre moteur de recherche</div>
            </div>
          </a>
        </div>

      </div>


                    -->     

    <!--FOOTER -------------------------------- -->


    </div>

    

    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>