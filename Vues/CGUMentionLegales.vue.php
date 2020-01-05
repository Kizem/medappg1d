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
                            <output name="MentionLegale"><?php  echo $ML?></output>

                            <h2 id="Debut CGU">Modèle de CGU</h2>
                            <output name="CGU"><?php  echo $CGU ?></output>
                        </div>
                </article>
            </section>
        </form>
        <!-- PIED DE PAGE -->
        <footer><?php include_once('includes/footer.php'); ?></footer>
    </body>
</html>