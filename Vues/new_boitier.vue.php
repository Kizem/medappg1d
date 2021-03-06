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
                            <h1 class="titre_formulaire">Creation d'un nouveau boitier</h1>
                        </div>

                        <div class="entreesInformations">

                                <div class="conteneurChamp">
                                    <label class="input-label" for="reference">
                                        <p class="champTexte">Référence du boîtier* : 
                                        </p>
                                        <input class="entreeDeTexte" type="charset" name="reference"/>
                                    </label>
                                    
                                </div>    

                                <div class="conteneurChamp">
                                    <label class="input-label"><p class="champTexte">Entité associée* :
                                        </p>
                                        <FORM>
                                        <SELECT class="liste" name="listeDeroulante" size="1">
                                            <OPTION value=0></OPTION>
                                            <?php while($e = $ListeEntite->fetch() ){ ?>
                                                <OPTION value=<?php $i ?>> <?php echo $e['idEntité'] ?>-<?php echo $e['Nom'] ?></OPTION>
                                                <?php 
                                                $i++;
                                            }
                                             ?>
                                        </SELECT>
                                    </FORM>
                                    </label>
                                </div>                        

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

        
    </body>
</html>