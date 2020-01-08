<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/FAQ.css"> 
        <title>FAQ Edition</title>
    </head>

    <body>
        <header><?php include_once('includes/header.php'); ?></header>

        <?php $requete = 0; ?>

        <form name="Edition de la FAQ" method="post" action=".../Edition_FAQ.php">

            <h2 id="Nom_Theme1">Thème n°1</h2>
            Veuillez indiquer le nom du thème n°1 : <input type="text" name="Theme1" placeholder="bile" /> <br/>


            <?php 

            if($requete==0){
               echo '<input type="submit" value="Ajouter une question" class="bouton_ajouter">';
            }

            elseif ($requete==1) {
                echo '<form action="index.php" method="get">
                    Question :  <textarea name="ML" rows="1" cols="70" required></textarea></br>
                    Réponse :  <textarea name="ML" rows="10" cols="70" required></textarea></br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="action" value="save"/>
                    <input type="submit"/>
                  </form>';
                $requete=0;
            
            } ?>



            <h2 id="Nom_Theme2">Thème n°2</h2>
            Veuillez indiquer le nom du thème n°2 : <input type="text" name="Theme2"/> <br/>

            <?php 

            if($requete==0){
               echo '<input type="submit" value="Ajouter une question" class="bouton_ajouter">';
            }

            elseif ($requete==2) {
                echo '<form action="index.php" method="get">
                    Question :  <textarea name="ML" rows="1" cols="70" required></textarea></br>
                    Réponse :  <textarea name="ML" rows="10" cols="70" required></textarea></br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="action" value="save"/>
                    <input type="submit"/>
                  </form>';
                $requete=0;
            
            } ?>


            <h2 id="Nom_Theme3">Thème n°3</h2>
            Veuillez indiquer le nom du thème n°3 : <input type="text" name="Theme3"/> <br/>

            <?php 

            if($requete==0){
               echo '<input type="submit" value="Ajouter une question" class="bouton_ajouter">';
            }

            elseif ($requete==3) {
                echo '<form action="index.php" method="get">
                    Question :  <textarea name="ML" rows="1" cols="70" required></textarea></br>
                    Réponse :  <textarea name="ML" rows="10" cols="70" required></textarea></br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input type="hidden" name="action" value="save"/>
                    <input type="submit"/>
                  </form>';
                $requete=0;
            
            } ?>

        </form>

        <footer><?php include_once('includes/footer.php'); ?></footer>
    </body>
</html>