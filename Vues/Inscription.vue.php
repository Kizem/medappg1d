<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Inscription.css"> 
        <title>Inscription</title>
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
        <form method="post" action="Inscription.php">
            <article class="art">
                <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Formulaire d'inscription</h1>
                        </div>

                        <div class="entreesInformations">
                            
                                <div class="conteneurChamp">
                                    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="nom">
                                            <p class="champTexte">Nom* :  
                                            </p>
                                            <input class="entreeDeTexte" type="charset" name="nom"required/>
                                        </label>
                                    </div>

                                    <div class="partieCachee">
                                    </div>
                                </div>
                                    

                                <div class="conteneurChamp">    
                                    <div class="partieAfficher">
                                        <label class="input-label" for="prenom"><p class="champTexte">Prenom* :  
                                    </p>
                                        <input class="entreeDeTexte" type="charset" name="prenom" required/>
                                        </label>      
                                    </div>
                                        <div class="partieCachee">
                                        </div>
                                </div>

                                

                                <div class="conteneurChamp">
                                    <label class="input-label" for="mail">
                                        <p class="champTexte">Adresse E-mail* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="mail"required/>
                                    </label>
                                    
                                </div>

                                <div class="conteneurChamp">
                                    <label class="input-label" for="login">
                                        <p class="champTexte">Pseudo* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="login"required/>
                                    </label>
                                    
                                </div>

                                <div id="divmdp1" class="conteneurChamp">
                                    
                                    <label class="input-label">
                                        <p class="champTexte">Mot de passe* : 
                                        </p>
                                        <input id="IMdp1" class="entreeDeTexte" type="password" name="motDePasse" required/>
                                    </label>
                                </div>
                                <div id="divmdp2"class="conteneurChamp">
                                    <label  class="input-label"><p class="champTexte">Confirmez le mot de passe* : 
                                        </p>
                                        <input id="IMdp2" class="entreeDeTexte" type="password" name="confirmMDP" required/>
                                    </label>
                                </div>
                                    
                                
                                <div class="conteneurChamp">
                                    <label class="input-label"><p class="champTexte" >Type d'utilisateur* : 
                                        </p>
                                        <FORM>
                                        <SELECT class="liste" name="listeDeroulante" size="1">
                                        <OPTION value=1>Utilisateur</OPTION>
                                        <OPTION value=2>Gestionnaire</OPTION>
                                        <OPTION value=3>Administrateur</OPTION>
                                        </SELECT>
                                    </FORM>
                                    </label>
                                    
                                </div>
                                <div class="conteneurChamp">
                                    <div class="champSepare">
                                        <label class="input-label">
                                            <div class="textePlusInfoBulle">
                                                <p class="champTexte">Code d'inscription* :    
                                                </p>
                                                <div class="infobulle"> 
                                                    <img src="ressources/aide.png" alt=" ? " style=width:13px;/> 
                                                    <span>Code fourni par votre établissement d'examen</span> 
                                                </div>
                                            </div>
                                            
                                            <input class="entreeDeTexte" type="charset" name="codeInscription"required/>
                                        </label>
                                    </div>
                                </div>
                                <div class="conteneurChampCGU">
                                    <input type="checkbox" name="CGUaccepted" value="1" required>
                                        <label>J'accepte les <a href="CGUMentionLegales.php">termes et conditions d'utilisation</a>
                                        </label>

                                </div>

                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="S'inscrire" required="">
                                </div>
                            
                        </div>
                        

                        <div class="asterix">
                            <p>* Champs obligatoire</p>
                        </div>

                    </div>
            </article>  
        </form>
        <footer><?php include_once('includes/footer.php'); ?></footer>
        <script src="Inscription.js"></script>
        <script type="text/javascript">
            sameMdp(document.getElementById('divmdp2'),document.getElementById('IMdp1'),document.getElementById('IMdp2'));
            securiteMdp(document.getElementById('divmdp1'),document.getElementById('IMdp1'))
        </script>
    </body>
</html>