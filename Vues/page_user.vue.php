<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/page_user.css"> 
        <title>Profil recherché</title>
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
        <section class="main">
            <center>
                <table class="tableInformations">
                    <tbody>
                        <tr>
                            <th scope="row">
                                Pseudo
                            </th>
                            <td>
                                <?php echo $login ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="Separation">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="NomPrenom">
                                <p><?php echo $Prenom ?></p>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2" class="NomPrenom">
                                <p><?php echo $Nom ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="Separation">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="texteImportant">
                                <p>Informations de base</p>
                            </td>
                        </tr>
     
                        <tr>
                            <th scope="row">
                                Adresse e-mail
                            </th>
                            <td>
                                <?php echo $Mail ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="Separation">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            
                    </tbody>
                </table>

                <p class="infos"> Si vous souhaitez modifier le mot de passe de cet utilisateur, veuillez procéder à la modification de ses caractérstiques et saisissez-le nouveau mot de passe dans le champ correspondant.</p>



                <script type="text/javascript">
                   function modif(){
                    // var new_type = prompt("Entrez le type du capteur");
                    // var new_seuil = prompt("Entrez le nouveau seuil");
                    
                    var new_type = prompt("Entrez le type du capteur");
                    var new_seuil = prompt("Entrez le nouveau seuil");
                    var icap = <?php echo json_encode($icap['idCapteur']); ?>;

                    // Création d'un objet XMLHttpRequest selon le navigateur

                    if (window.XMLHttpRequest) {
                        xmlhttp= new XMLHttpRequest();
                    } else {
                        if (window.ActiveXObject)
                            try {
                                xmlhttp= new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (e) {
                                try {
                                    xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    return NULL;
                                }
                            }
                      }

                      xmlhttp.open("GET", "modif_capteur.php?type=" + new_type + "&seuil=" + new_seuil + "&cap=" + icap, true);
                      xmlhttp.send();
                    }
                </script>    
                <center>
                <a class="modif_user"onclick="modif()" href="monEspace.php">Modifier les caractéristiques de cet utilisateur</a>
                </center>
            </center>
            
        </section>
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php'); ?></footer>
        
    </body>
</html>