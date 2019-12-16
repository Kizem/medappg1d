<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/page_capteur.css">
  <title>MedApp Project</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div id = "main">

      <div align="center">
          <img class="bannière" src="ressources/Page_capteur.png" alt="Alt text"/>
      </div>

      <div class="affichage_top">
        <div class="illu_cap">
        
            <?php $icap = $this_cap->fetch() ?>

             <?php if($icap['Type']=='température') { ?>

              <img class="img_illu_cap" src="ressources/cap_temp.jpg" alt="Alt text"/>


            <?php } else if($icap['Type']=='auditif'){ ?>

              <img class="img_illu_cap" src="ressources/cap_aud.jpg" alt="Alt text"/>


            <?php } else if($icap['Type']=='cardiaque'){ ?>

             <img class="img_illu_cap" src="ressources/cap_card.png" alt="Alt text"/>


            <?php } else{}?>
        </div>

        <div class="infos_cap">

          <p> Type de capteur : <?= $icap['Type'] ?> </p>
          <p> ID du capteur : <?= $icap['idCapteur'] ?> </p>          
          <p> Seuil du capteur : <?= $icap['seuil'] ?> </p>

        </div>


      </div>



    </div>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>