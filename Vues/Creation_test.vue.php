<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/add_capteur.css"> 
  <title>Creation session de test</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?>
        
    </header>
       <?php 
            if(!empty($erreur)){
                include_once('includes/alerte.php');
            }
            if(!empty($resultat)){
                include_once('includes/validation.php');
            }
        ?>

      <form autocomplete="off" method="post" action="Creation_test.php">
            <article class="art">
                    <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Creation session de test</h1>
                        </div>

                        <div class="entreesInformations">
                            
                                <div class="conteneurChamp">
                                    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Pseudo">
                                            <p class="champTexte">Pseudo :  
                                            </p>

                                            <input id="pseudoCreationSessionDeTest" class="entreeDeTexte" type="charset" name="Pseudo"required/>
                                                
                                                
                                        </label>
                                    </div>
                                </div>
                                    

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Date">
                                          <p class="champTexte">Date :  
                                        </p>
                                          <input class="entreeDeTexte" type="date" name="Date" required/>
                                        </label>      
                                    </div>

                                </div>

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="heure">
                                          <p class="champTexte">heure :  
                                        </p>
                                          <input class="entreeDeTexte" name="heure" type="time" id="appt"  min="09:00" max="18:00" required/>
                                          
                                        </label>      
                                    </div>

                                </div>

                                <div class="conteneurChamp">
                                    <label class="input-label"><p class="champTexte">Capteurs: 
                                        </p>
                                        <FORM>
                                        <SELECT class="liste" name="listeDeroulante" size="1">
                                            <?php while($c = $ListesCapteurs->fetch() ){ ?>
                                                <OPTION value=<?php echo $c['idCapteur'] ;?> > <?php echo $c['idCapteur'] ?>-<?php echo $c['Type'] ?></OPTION>
                                                <?php
                                                $i++;

                                            } ?>
                                        </SELECT>
                                    </FORM>
                                    </label>
                                </div>

                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="Valider">
                                </div>
                            
                        </div>
                    </div>
            </article>  
        </form>
        <script src="autoCompletion.js"></script>
    
    <a href="graphique.php"> graphique</a>
    <footer><?php include_once('includes/footer.php'); ?></footer>
    <script>
        autocomplete(document.getElementById("pseudoCreationSessionDeTest"), <?php echo json_encode($listePseudo); ?>);
    </script>
  </body>
</html>