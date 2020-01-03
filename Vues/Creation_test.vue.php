<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/add_capteur.css"> 
  <title>Creation session de test</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Création session de test</h1>
                        </div>

                        <div class="entreesInformations">
                            
                                <div class="conteneurChamp">
                                    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Pseudo">
                                            <p class="champTexte">Pseudo :  
                                            </p>
                                            <input class="entreeDeTexte" type="charset" name="Pseudo"/>
                                        </label>
                                    </div>
                                </div>
                                    

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Date">
                                          <p class="champTexte">Date :  
                                        </p>
                                          <input class="entreeDeTexte" type="charset" name="Date" />
                                        </label>      
                                    </div>

                                </div>

                                <div class="conteneurChamp">
                                    <label class="input-label" for="Capteur">
                                        <p class="champTexte">Capteur : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="Capteur"/>
                                    </label>
                                    
                                </div>

                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="Valider">
                                </div>
                            
                        </div>
                        <div class="boiteErreur">
                            <p class="erreur"><?php echo $erreur ?></p>
                        </div>
                    </div>
            </article>  
        </form>
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>