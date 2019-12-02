<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="design/index.css" />
		<title>MedAPP</title>
	</head>
	<body>
		<!-- L'en-tête -->
		<header><?php include_once('includes/header.php'); ?></header>	
		<!-- Le contenu (1 seule section suffit) -->		
		<section>
			<h1>Bienvenue sur notre site</h1>
			<h2><p>Veuillez vous identifier ou <a href= inscription.php>créer un compte </a></p></h2>
		

			<form method="POST" action="connexion.php">
			<article class="art">
            <div class="boxtotale">
                    <div class="titrePage">
                        <h1 class="titre_formulaire">Formulaire de connexion</h1>
                        <div class="conteneurChamp">    
                    	<div class="partieAfficher">
				<p>	<label for="login">Login</label>
					<input id="login" name="login" type="text" required autofocus/> 
				</p>
				</div>

                <div class="partieCachee">
                </div>
              	</div>
				<p>	<label for="Mdp">Mot de passe</label>
					<input id="Mdp" name="Mdp" type="Mdp" required />
				</p>
				<p>	
					<button id="envoi" name="envoi" type="submit" value="envoi">Connexion</button> 
					 <a href= changepassword.php>mot de passe oublié: cliquez ici</a>
				</p>
				<?php 
					include ("includes/AccesBase.php");
				?>
					
			</form>
		</section>

		<footer><?php include_once('includes/footer.php'); ?></footer>
	</body>
</html>
