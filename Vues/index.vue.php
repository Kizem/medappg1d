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

        <!-- MENU ------------------------------->

        <ul class="menu">
          <li class="limenu"><a class="title_menu" href="index.php">Accueil</a></li>
          <li class="limenu"><a href="#news">News</a></li>
          <li class="limenu"><a href="#tests">Nos tests</a></li>
          <li class="limenu"><a href="#nos_tests">Mon espace</a></li>
          <li class="limenu"><a href="#do_test">Participer à un test</a></li>
          <li class="limenu"><a href="#a_propos">A propos</a></li>
        </ul>

         <!-- MENU ------------------------------->


        <center>
          <div class="img_test"><a href="#nos_tests">
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
        </center>


      <div class=images_down>

        <div class="img_user"><a href="#nos_tests">
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

        <div class="img_gestionnaire"><a href="#nos_tests">
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