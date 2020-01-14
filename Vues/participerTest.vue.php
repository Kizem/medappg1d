<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/participerTest.css"> 
        <title>Participer Test</title>
    </head>
    <body>
        <!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
        <?php 
            if(!empty($erreur)){
                include_once('includes/alerte.php');
            }
            if(!empty($resultat)){
                include_once('includes/validation.php');
            }
        ?>
        <form method="post" action="participerTest.php">
            <article class="art">
                <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Participation a un test</h1>
                        </div>

                        <div class="entreesInformations">
                            
                                <div class="conteneurChamp">
                                    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="nom">
                                            <p class="champTexte">Nom :  
                                            </p>
                                            <input class="entreeDeTexte" type="charset" name="nom"required/>
                                        </label>
                                    </div>

                                    <div class="partieCachee">
                                    </div>
                                </div>
                                    

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="prenom"><p class="champTexte">Prenom :  
                                    </p>
                                        <input class="entreeDeTexte" type="charset" name="prenom" required/>
                                        </label>      
                                    </div>
                                        <div class="partieCachee">
                                        </div>
                                </div>


                                <div class="conteneurChamp">
                                    <label class="input-label" for="login">
                                        <p class="champTexte">Pseudo : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="login"required/>
                                    </label>
                                    
                                </div>

                                <div id="divmdp1" class="conteneurChamp">
                                    
                                    <label class="input-label">
                                        <p class="champTexte">Code* : 
                                        </p>
                                        <input id="IMdp1" class="entreeDeTexte" type="charset" name="Code" required/>
                                    </label>
                                </div>
                                
                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="Participer" required>
                                </div>
                        </div>
                        <div class="asterix">
                            <p>*Code fourni par votre établissement</p>
                        </div>
                    </div>
            </article>  
        </form>
        <footer><?php include_once('includes/footer.php'); ?></footer>
        
    </body>
</html>