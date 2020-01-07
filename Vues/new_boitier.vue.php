<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/new_boitier.css"> 
        <title>Nouveau boîtier</title>
    </head>
    <body>
        <header><?php include_once('includes/header.php'); ?></header>

        <form method="post" action="new_boitier.php">
            <article class="art">
                <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Création d'un nouveau boîtier</h1>
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
                                        <label class="input-label" for="adresse"><p class="champTexte">adresse* :  
                                    </p>
                                        <input class="entreeDeTexte" type="charset" name="adresse" />
                                        </label>      
                                    </div>
                                        <div class="partieCachee">
                                        </div>
                                </div>

                                <div class="conteneurChamp">
                                    <label class="input-label"><p class="champTexte">Type d'entité* : 
                                        </p>
                                        <FORM>
                                        <SELECT class="liste" name="listeDeroulante" size="1">
                                        <OPTION value=0></OPTION>
                                        <OPTION value=1>Auto-école</OPTION>
                                        <OPTION value=2>Centre de formation pour pilotes</OPTION>
                                        </SELECT>
                                    </FORM>
                                    </label>
                                    
                                </div>                                

                                <div class="conteneurChamp">
                                    <label class="input-label" for="gestionnaire">
                                        <p class="champTexte">Premier gestionnaire* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="gestionnaire"/>
                                    </label>
                                    
                                </div>

                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="S'inscrire">
                                </div>
                            
                        </div>
                        <div class="boiteErreur">
                            <p class="erreur"><?php echo $erreur ?> !</p>
                        </div>

                        <div class="asterix">
                            <p>* Champs obligatoires</p>
                        </div>

                    </div>
            </article>  
        </form>

        <footer><?php include_once('includes/footer.php'); ?></footer>
        
    </body>
</html>