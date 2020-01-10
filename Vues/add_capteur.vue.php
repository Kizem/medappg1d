<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/add_capteur.css"> 
        <title>Ajout de capteur</title>
    </head>
    <body>
        <header><?php include_once('includes/header.php'); ?></header>

        <form method="post" action="add_capteur.php">
            <article class="art">
                <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Ajout capteur</h1>
                        </div>

                        <div class="entreesInformations">
                            
                                <div class="conteneurChamp">
                                    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Type">
                                            <p class="champTexte">Type :  
                                            </p>
                                            <input class="entreeDeTexte" type="charset" name="Type" required/>
                                        </label>
                                    </div>
                                </div>
                                    

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="Valeur_init">
                                        	<p class="champTexte">Valeur initiale :  
                                    		</p>
                                        	<input class="entreeDeTexte" type="charset" name="Valeur_init"required />
                                        </label>      
                                    </div>

                                </div>

                                <div class="conteneurChamp">
                                    <label class="input-label" for="Seuil">
                                        <p class="champTexte">Seuil du capteur : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="Seuil"required/>
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