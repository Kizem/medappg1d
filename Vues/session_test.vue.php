<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/session_test.css">
  <link rel="stylesheet" type="javascript" href="Vues/test.js">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

        <!--BODY --------------------------------- -->

        <div>

          <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

          <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
            }
          </script>

        </div>



        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <div class="ban" align="center"> 
          <div class="test1" align="center">
            <img class="image" src="ressources/cardiac_test.jpg" alt="Alt text"/>
            <p class="table_header">TEST SUR LA FREQUENCE CARDIAQUE
              <p class="table">Ce test sur la frequence cardiaque va nous permettre d'obtenir plusieurs valeurs,
            notamment votre niveau de stress</p>
            </p>
            
            <a href="nos_tests.php"></a><a href="monEspace.php" class="do_tests">realiser le test</a>
          </div>

          <div class="test2" align="center">
            <img class="image" src="ressources/temperature_test.jpg" alt="Alt text"/>
            <p class="table_header">TEST SUR LA TEMPERATURE CORPORELLE 
              <p class="table">Ce test de temparature va nous permettre d'obtenir plusieurs valeurs,
              qui combiné a votre frequence cardiaque va nous donner une valeur precise de votre niveau de stress</p>
            </p>
            <a href="nos_tests.php"></a><a href="monEspace.php" class="do_tests">realiser le test</a>
          </div>

          <div class="test3" align="center">
            <img class="image" id="img_chien" src="ressources/sond_test.jpg" alt="Alt text"/>
            <p class="table_header">TEST SUR L'ACCUITÉE AUDITIVE 
              <p class="table">L'audition est très importante pour la conduite de tout véhicule et même pour l'orientation dans l'espace grâce à l'oreille interne</p>
            </p>
            <a href="nos_tests.php"></a><a href="monEspace.php" class="do_tests">realiser le test</a>
          </div>
        </div>
    <!--FOOTER -------------------------------- -->

    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>