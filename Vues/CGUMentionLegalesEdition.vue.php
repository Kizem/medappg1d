<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/CGUMentionLegales.css"> 
        <title>CGU et Mention légales</title>
    </head>
    <body>
        <!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <form method="post" action="CGUMentionLegalesEdition.php">
        <section class="section">
            
            <div class="titrePage">
                <div class="titreP">
                    <h1>Mentions legales et Conditions generales d'utilisation</h1>
                </div>
            </div>
            <nav class=menuNav>
                <ul id="navigation">
                    <li><a href="#Debut ML">Mention légales</a></li>
                    <li><a href="#Debut CGU">CGU</a></li>
                </ul>
            </nav>
            <article class="texte">
                <div class="zoneArticle">
                        <h2 id="Debut ML">Mentions Légales</h2>
                        <textarea name="ML" rows="50" cols="70"   required><?php  echo $ML; ?></textarea>
                        
                        <h2 id="Debut CGU">Conditions generales d'utilisation</h2>   
                        <textarea name="CGU" rows="50" cols="70"   required><?php  echo $CGU?></textarea>
                </div>
            </article>
            <div class="boxBoutonEdit">
                <input class="Valider" type="submit" value="Valider">
            </div>
        </section>
        <!-- PIED DE PAGE -->
        <footer><?php include_once('includes/footer.php'); ?></footer>
    </body>
</html>