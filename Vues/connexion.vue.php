<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="design/inscription.css" />
		<title>MedAPP</title>
	</head>
	<body>
		<!-- L'en-tête -->

		<header>
            <?php include_once('includes/header.php'); ?>
        </header>	
        <?php 
            if(!empty($erreur)){
                include_once('includes/alerte.php');
            }
            if(!empty($resultat)){
                include_once('includes/validation.php');
            }
        ?>

		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<form method="post" action="connexion.php ?>">
                <article class="art">
                    <div class="boxtotale_2">

            			<h1 class="titre_formulaire">Connexion</h1>

            			                        <div class="entreesInformations">
                                        
                                            <div class="conteneurChamp">
                                                
                                                <div class="partieAfficher">
                                                    <label class="input-label" for="nom">
                                                        <p class="champTexte">login* :  
                                                        </p>
                                                        <input class="entreeDeTexte" type="charset" name="login"required autofocus/>
                                                    </label>
                                                </div>

                                                <div class="partieCachee">
                                                </div>
                                            </div>
                                                


                                            <div class="conteneurChamp">
                                                
                                                <label class="input-label">
                                                    <p class="champTexte">Mot de passe* : 
                                                    </p>
                                                    <input class="entreeDeTexte" type="password" name="Mdp"required autofocus/>
                                                </label>
                                            </div>
                                  


                                            <div class="conteneurChamp">
                                                <input class="boutonValider" type="submit" value="Connexion">				
                                            </div>
                                            <div class="Mdp_oublié">
                                                <a class = "forgot" href="connexion.php?forgot=1">Mot de passe oublié?</a>
                                        	</div>

            				
        				<?php 
        					include ("includes/AccesBase.php");
        				?>
        			</div>
                </article>		
			</form>
		</section>

		<footer>
            <?php //include_once('includes/footer.php'); ?>
 
        </footer>
	</body>
</html>
