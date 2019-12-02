<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/session_test.css">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

        <!--BODY --------------------------------- -->
        <div class="ban" align="center"> 
          <div class="test1" align="center">
            <img class="image" src="ressources/cardiac_test.jpg" alt="Alt text"/>
            <p class="table_header">TEST SUR LA FREQUENCE CARDIAQUE
              <p class="table">Ce test sur la frequence cardiaque va nous permettre d'obtenir plusieurs valeurs,
            notamment votre niveau de stress</p>
            </p>
            
            <a href="nos_tests.php"></a><button class="do_tests">realiser le test</button>
          </div>

          <div class="test2" align="center">
            <img class="image" src="ressources/temperature_test.jpg" alt="Alt text"/>
            <p class="table_header">TEST SUR LA TEMPERATURE CORPORELLE</p>
            <a href="nos_tests.php"></a><button class="do_tests">realiser le test</button>
          </div>
        </div>
    <!--FOOTER -------------------------------- -->

    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>