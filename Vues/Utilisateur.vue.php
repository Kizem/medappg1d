<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Utilisateur.css"> 
		<title>Page Utilisateur</title>
	</head>
	<body>
		<!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
        
        <table>
            <tr>
                <td>Fréquence cardiaque</td>
                <td>Valeurs</td>
            </tr>
            <tr>
                <td>Température du corps</td>
                <td>Valeurs</td>
            </tr>
            <tr>
                <td>Perception auditive</td>
                <td>Valeurs</td>
            </tr>

        </table>    
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
                                        <input class="entreeDeTexte" type="charset" name="nom"/>
                                    </label>
                                </div>

                                <div class="partieCachee">
                                </div>
                            </div>
                                

                            <div class="conteneurChamp">    
                                <div class="partieAfficher">
                                    <label class="input-label" for="prenom"><p class="champTexte">Prenom* :  
                                </p>
                                    <input class="entreeDeTexte" type="charset" name="prenom" />
                                    </label>      
                                </div>
                                    <div class="partieCachee">
                                    </div>
                            </div>

                            

                            <div class="conteneurChamp">
                                <label class="input-label" for="mail">
                                    <p class="champTexte">Adresse E-mail* : 
                                    </p>
                                    <input class="entreeDeTexte" type="charset" name="mail"/>
                                </label>
                                
                            </div>

                            <div class="conteneurChamp">
                                <label class="input-label" for="login">
                                    <p class="champTexte">Pseudo* : 
                                    </p>
                                    <input class="entreeDeTexte" type="charset" name="login"/>
                                </label>
                                
                            </div>

                            <div class="conteneurChamp">
                                
                                <label class="input-label">
                                    <p class="champTexte">Mot de passe* : 
                                    </p>
                                    <input class="entreeDeTexte" type="charset" name="motDePasse"/>
                                </label>
                            </div>
                            <div class="conteneurChamp">
                                <label class="input-label"><p class="champTexte">Confirmez le mot de passe* : 
                                    </p>
                                    <input class="entreeDeTexte" type="charset" name="confirmMDP"/>
                                </label>
                            </div>
                                
                            
                            <div class="conteneurChamp">
                                <label class="input-label"><p class="champTexte">Type d'utilisateur* : 
                                    </p>
                                    <FORM>
                                    <SELECT class="liste" name="listeDeroulante" size="1">
                                    <OPTION value=0></OPTION>
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
                                        
                                        <input class="entreeDeTexte" type="charset" name="codeInscription"/>
                                    </label>
                                </div>
                            </div>
                            <div class="conteneurChampCGU">
                                <input type="checkbox" name="CGUaccepted" value="1">
                                    <label>J'accepte les <a href="CGUMentionLegales.html">termes et conditions d'utilisation</a>
                                    </label>

                            </div>

                            <div class="conteneurChamp">
                                <input class="boutonValider" type="submit" value="S'inscrire">
                            </div>
                        
                    </div>
                    <div class="asterix">
                        <p>* Champs obligatoire</p>
                    </div>

                </div>
                </form>
        </article>
        <?php
            include ("includes/footer.php");
        ?>
	</body>
</html>