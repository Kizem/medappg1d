<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="design/FAQ.css"> 
        <title>FAQ Edition</title>
    </head>

    <body>
        <header> <?php ?></header>
        
        <nav>

            <div>

                <article class="themes">
                    <div class="zoneArticle">
                        <h2 id="Nom_Theme1">Thème n°1</h2>
                        <output name="theme1"><?php  echo $Thème?></output>

                        <h2 id="Nom_Theme2">Thème n°2</h2>
                        <output name="theme2"><?php  echo $Thème ?></output>

                        <h2 id="Nom_Theme3">Thème n°3</h2>
                        <output name="theme3"><?php  echo $Thème ?></output>
                    </div>
                </article>

            </div>

        </nav>






        <footer><?php include_once('includes/footer.php'); ?></footer>
    </body>
</html>