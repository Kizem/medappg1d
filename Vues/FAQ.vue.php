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


			<h2 id="ancre_theme1">Thème 1</h2>

			<div class="t1_questions">
				<h1 id="ancre_theme1_q1">Question 1</h1>

				<p>
					réponse 1
				</p>

				<h1 id="ancre_theme1_q2">Question 2</h1>

				<p>
					réponse 2
				</p>

				<h1 id="ancre_theme1_q3">Question 3</h1>

				<p>
					réponse 3
				</p>

				<h1 id="ancre_theme1_q4">Question 4</h1>

				<p>
					réponse 4
				</p>

				<h1 id="ancre_theme1_q5">Question 5</h1>

				<p>
					réponse 5
				</p>

				<h1 id="ancre_theme1_q6">Question 6</h1>

				<p>
					réponse 6
				</p>

				<h1 id="ancre_theme1_q7">Question 7</h1>

				<p>
					réponse 7
				</p>
			</div>

			<h2 id="ancre_theme2">Thème 2</h2>

			<div class="t2_questions">
				<h1 id="ancre_theme2_q1">Question 1</h1>

				<p>
					réponse 1
				</p>

				<h1 id="ancre_theme2_q2">Question 2</h1>

				<p>
					réponse 2
				</p>

				<h1 id="ancre_theme2_q3">Question 3</h1>

				<p>
					réponse 3
				</p>

				<h1 id="ancre_theme2_q4">Question 4</h1>

				<p>
					réponse 4
				</p>

				<h1 id="ancre_theme2_q5">Question 5</h1>

				<p>
					réponse 5
				</p>

				<h1 id="ancre_theme2_q6">Question 6</h1>

				<p>
					réponse 6
				</p>

				<h1 id="ancre_theme2_q7">Question 7</h1>

				<p>
					réponse 7
				</p>
			</div>

				

			<h2 id="ancre_theme3">Thème 3</h2>

			<div class="t3_questions">
				<h1 id="ancre_theme3_q1">Question 1</h1>

				<p>
					réponse 1
				</p>

				<h1 id="ancre_theme3_q2">Question 2</h1>

				<p>
					réponse 2
				</p>

				<h1 id="ancre_theme3_q3">Question 3</h1>

				<p>
					réponse 3
				</p>

				<h1 id="ancre_theme3_q4">Question 4</h1>

				<p>
					réponse 4
				</p>

				<h1 id="ancre_theme3_q5">Question 5</h1>

				<p>
					réponse 5
				</p>

				<h1 id="ancre_theme3_q6">Question 6</h1>

				<p>
					réponse 6
				</p>

				<h1 id="ancre_theme3_q7">Question 7</h1>

				<p>
					réponse 7
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