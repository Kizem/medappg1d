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
            <div align="center">
                <img class="bannière" src="ressources/page_user.png" alt="Alt text"/>
            </div>
            <center>
                <table class="tableInformations">
                    <tbody>
                        <tr>
                            <th class="label" scope="row">
                                Pseudo
                            </th>
                            <td class="Info">
                                <?php echo $login ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="Separation">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th class="label">Prénom</th>
                            <td colspan="2" class="Info">
                                <p><?php echo $Prenom ?></p>
                            </td>
                            
                        </tr>
                        <tr>
                            <th class="label">Nom</th>
                            <td colspan="2" class="Info">
                                <p><?php echo $Nom ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="Separation">
                                <hr>
                            </td>
                        </tr>
     
                        <tr>
                            <th class="label" scope="row">
                                Adresse e-mail
                            </th>
                            <td class="Info">
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

                <p class="label"> Si vous souhaitez modifier le mot de passe de cet utilisateur, veuillez procéder à la modification de ses caractérstiques et saisissez-le nouveau mot de passe dans le champ correspondant.</p>



                <script type="text/javascript">
                   function modifUser(){
                    // var new_type = prompt("Entrez le type du capteur");
                    // var new_seuil = prompt("Entrez le nouveau seuil");
                    
                    var new_login = prompt("Entrez le login souhaité");
                    var new_mail = prompt("Entrez le mail souhaité");
                    var new_mdp = prompt("Entrez le mot de passe souhaité");
                    var icap = <?php echo json_encode($idUser); ?>;

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

                      xmlhttp.open("GET", "modif_user.php?login=" + new_login + "&mail=" + new_mail + "&mdp="+ new_mdp + "&user=" + icap, true);
                      xmlhttp.send();
                    }
                </script>    
                <center>
                <a class="modif_user"onclick="modifUser()" href="monEspace.php">Modifier les caractéristiques de cet utilisateur</a>
                </center>
            </center>
            
        </section>
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php'); ?></footer>
        
    </body>
</html>