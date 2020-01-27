<!DOCTYPE html>
<html>

	<head>

        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/FAQ.css">
		<title>FAQ</title>

	</head>

        <header><?php include_once('includes/header.php'); ?></header>

	<body>

		<section class="zoneAdmin">

			<!-- seul l'administrateur peut voir le bouton de modification -->

            <?php 
            	if (!isset($_SESSION)){
	            	if($_SESSION['Type']=='Administrateur') {?>

					<div class="edit">
						<form method="post" action="Vues/Edition_FAQ.vue.php">
							<input type="submit" value="Edit" class="bouton_modifier">
						</form>
					</div>
			<?php } } ?>

		</section>

		<h3>Foire aux questions</h3>

		<nav>
			<ul>
				<li class="deroulant">
					<a href="#ancre_theme1">Thème 1 &ensp;</a>
					<ul class="sous">
						<li><a href="#ancre_theme1_q1">Question 1</a></li>
						<li><a href="#ancre_theme1_q2">Question 2</a></li>
						<li><a href="#ancre_theme1_q3">Question 3</a></li>
						<li><a href="#ancre_theme1_q4">Question 4</a></li>
					</ul>
				</li>

				<li class="deroulant">
					<a href="#ancre_theme2">Thème 2 &ensp;</a>
					<ul class="sous">
						<li><a href="#ancre_theme2_q1">Question 1</a></li>
						<li><a href="#ancre_theme2_q2">Question 2</a></li>
						<li><a href="#ancre_theme2_q3">Question 3</a></li>
						<li><a href="#ancre_theme2_q4">Question 4</a></li>
					</ul>
				</li>

				<li class="deroulant">
					<a href="#ancre_theme3">Thème 3 &ensp;</a>
					<ul class="sous">
						<li><a href="#ancre_theme3_q1">Question 1</a></li>
						<li><a href="#ancre_theme3_q2">Question 2</a></li>
						<li><a href="#ancre_theme3_q3">Question 3</a></li>
						<li><a href="#ancre_theme3_q4">Question 4</a></li>
					</ul>
				</li>

				<li class="deroulant_autre">
					<a href="#ancre_contact">Nous contacter &ensp;</a>
				</li>

				<li class="deroulant_autre">
					<a href="#ancre_propos">A propos &ensp;</a>
				</li>

			</ul>
		</nav>


		<?php ?>

		<div class="theme">


			<h2 id="ancre_theme1">Questions sur l'inscription</h2>

			<div class="t1_questions">
				<h1 id="ancre_theme1_q1">Où trouver mon code d'inscription ?</h1>

				<p>
					Vous devriez recevoir votre code dans un courrier envoyé chez vous.
				</p>

				<h1 id="ancre_theme1_q2">Je n'arrive pas à rentrer mon mot de passe lors de l'inscription </h1>

				<p>
					Utilisez un mot de passe plus compliqué, comprenant des majuscules, minuscules, chiffres et caractères spéciaux.
				</p>

				<h1 id="ancre_theme1_q3">Je peux mettre ce que je veux comme speudo ?</h1>

				<p>
					Non, votre seul restriction est d'éviter de mettre un speudo injurieux. Dans le cas contraire, vous risquez un bannissement
				</p>

				<h1 id="ancre_theme1_q4">Mon code d'inscription ne marche pas</h1>

				<p>
					Veuillez contacter votre établissement d'examen.
				</p>

				
			</div>

			<h2 id="ancre_theme2">Questions sur les tests</h2>

			<div class="t2_questions">
				<h1 id="ancre_theme2_q1">Quels sont les tests disponibles ?</h1>

				<p>
					Les tests de bases assumés par nos boîtiers sont la prise de température, le mesure de fréquence cardiaque et la mesure des capacités auditives. Ensuite, selon votre centre d'examen, d'autres tests pourraient être ajoutés.
				</p>

				<h1 id="ancre_theme2_q2">Où consulter mes résultats</h1>

				<p>
					Votre page mon espace.
				</p>

				<h1 id="ancre_theme2_q3">Est-ce que mes résultats restent confidentiels ?</h1>

				<p>
					Non, en vous inscrivant, vous accepter que les gestionnaires et administrateurs de votre centre d'examen accèdent à vos résultats.
				</p>

				<h1 id="ancre_theme2_q4">Comment faire pour récupérer mes résultats en format papier ?</h1>

				<p>
					Envoyez un mail à votre centre d'examen.
				</p>

				
			</div>

				

			<h2 id="ancre_theme3">Questions sur le boîtier.</h2>

			<div class="t3_questions">
				<h1 id="ancre_theme3_q1">Je voudrais obtenir l'un de vos boîtiers</h1>

				<p>
					Envoyez nous un message sur la page officielle de INFINTE MEASURES.
				</p>

				<h1 id="ancre_theme3_q2">Est-il possible de réaliser d'autres types de tests que ceux fournis par le centre ?</h1>

				<p>
					Non
				</p>

				<h1 id="ancre_theme3_q3">Le boîtier ne semble plus fonctionner</h1>

				<p>
					Renvoyer le au siège social d'INFINTE MEASURES. 
				</p>

				<h1 id="ancre_theme3_q4">Vous êtes les meilleurs !</h1>

				<p>
					Merci !
				</p>

				
			</div>

		</div>

		<p>
							<h2 id="ancre_contact">Nous contacter</h2>
							<form id="mail" action="FAQ.php" method="POST">
								<article class="email">
						            <div class="boxtotale_2">

            			                        <div class="entreesInformations">
                                        
                                            <div class="conteneurChamp">
                                                
                                                <div class="partieAfficher">
                                                    <label class="input-label" for="nom">
                                                    	<p>email:</p>
                                                        <input type="text" name="from" required>
                                                    </label>
                                                </div>

                                                <div class="partieCachee">
                                                </div>
                                            </div>
                                                
                                            <div class="conteneurChamp">
                                                <label class="input-label">
                                                	<p> Subject:</p>
                                                    <input type="text" name="subject" required><p>
                                                </label>
                                            </div>
                                  			
                                  			<div class="conteneurChamp">
                                                <label class="input-label">
                                                	<p id="msg">Votre message</p>
                                                    <textarea name="message" required=""></textarea><p>
                                                </label>
                                            </div>


                                           	<div class="conteneurChamp">
                                            	<input type="submit" class="submit" value="Envoyer">				
                                            </div>
                                            

						        </article>
							</form>
		</p>


		<p>
			<h2 id="ancre_propos">A propos</h2>
			<p> Cette plateforme a été réalisée par la société Digitest, réunissant six étudiants diplômés de l'ISEP, école d'ingénieur du numérique.</p>
		</p>
		<footer><?php include_once('includes/footer.php'); ?></footer>
	</body>

</html>