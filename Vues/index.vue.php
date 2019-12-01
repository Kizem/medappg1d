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
        <div class="test" align="center">
          <img class="image" src="ressources/Nos_tests.png" alt="Alt text"/>
          <a href=""></a><button class="know_more">En savoir plus</button>
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


                        

    <!--FOOTER -------------------------------- -->


    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>