<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/gestionnaire_boit.css"> 
        <title>Associer un gestionnaire à un boîtier</title>
    </head>
    <body>
        <header><?php include_once('includes/header.php'); ?></header>

        <form method="post" action="gestionnaire_boit.php">
            <article class="art">
                <div class="boxtotale">
                        <div class="titrePage">
                            <h1 class="titre_formulaire">Associer un gestionnaire a un boitier</h1>
                        </div>

                        <div class="entreesInformations">
<!-- 
                                <div class="conteneurChamp">
                                    <label class="input-label"><p class="champTexte">Entité associée au boîtier et au gestionnaire* :
                                        </p>
                                        <FORM>
                                        <SELECT class="liste" name="listeDeroulante" size="1">
                                            <OPTION value=0></OPTION>
                                            <?php // while($e = $ListeEntite->fetch() ){ ?>
                                                <OPTION value=<?php $i ?> > <?php// echo $e['idEntité'] ?>-<?php // echo $e['Nom'] ?></OPTION>
                                                <?php 
                                               // $i++;
                                            
                                             ?>
                                        </SELECT>
                                    </FORM>
                                    </label>
                                </div>      
                            --> 

                                <div class="conteneurChamp">
                                    <label class="input-label" for="reference">
                                        <p class="champTexte">Référence du boîtier à associer* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="reference"/>
                                    </label>
                                    
                                </div>           

                                <div class="conteneurChamp">
                                    <label class="input-label" for="pseudo">
                                        <p class="champTexte">Pseudo du gestionnaire* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="pseudo"/>
                                    </label>
                                    
                                </div>         

                   

<!--                                 <div class="conteneurChamp">
                                    <label class="input-label" for="gestionnaire">
                                        <p class="champTexte">Pseudo du premier gestionnaire* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="gestionnaire"/>
                                    </label>
                                    
                                </div> -->

                                <div class="conteneurChamp">
                                    <input class="boutonValider" type="submit" value="Valider">
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