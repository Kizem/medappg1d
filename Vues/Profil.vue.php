<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Profil.css"> 
        <title>Page de connexion</title>
    </head>
    <body>
        <!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
        <section class="main">
            <table class="tableInformations">
                <tbody>
                	<tr>
                        <td colspan="2" class=texteAuCentre>
                            <img src="ressources/PhotoDeProfil.png" alt="Photo de profil">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="Separation">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="NomPrenom">
                            <p>Prenom</p>
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" class="NomPrenom">
                            <p>Nom</p>
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
                            Pseudo
                        </th>
                        <td>
                            Mettre le pseudo
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Adresse e-mail
                        </th>
                        <td>
                            Mettre l'email'
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="Separation">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="texteImportant">
                            <p>Informations avancées</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Sexe
                        </th>
                        <td>
                            Homme/femme
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Date de naissance
                        </th>
                        <td>
                            Date
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Taille
                        </th>
                        <td>
                            2m
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            Poids
                        </th>
                        <td>
                            1tonne
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="ConteneurCentral">
                <div class="Titre">
                    <h1>Editer vos informations</h1>
                </div>
                <div class="ConteneurInformationDeBase">
                    <div>
                        <h2>Informations de base</h2>
                    </div>
                    <div class="BoxPlusieursChamps">
                        <div class="Entree">
                            <label class="input-label" for="prenom"><p class="champTexte">Photo de profil :  </p>
                                <input type="file" id="photo" name="photo" />
                            </label> 
                        </div>
                        
                    </div>
                    <div class="BoxPlusieursChamps">
                        <div class="Entree">
                            <label class="input-label" for="prenom"><p class="champTexte">Prenom :  </p>
                                    <input class="entreeDeTexte" type="charset" name="prenom" />
                            </label> 
                        </div>
                        <div class="Entree">
                            <label class="input-label" for="om"><p class="champTexte">Nom :  </p>
                                    <input class="entreeDeTexte" type="charset" name="nom" />
                            </label> 
                        </div>
                    </div>
                    <div class="BoxPlusieursChamps">    
                        <div class="Entree">
                            <label class="input-label" for="mail"><p class="champTexte">Adresse E-mail :  </p>
                                    <input class="entreeDeTexte" type="charset" name="mail" />
                            </label> 
                        </div>
                        <div class="Entree">
                            <label class="input-label" for="login"><p class="champTexte">Pseudo :  </p>
                                    <input class="entreeDeTexte" type="charset" name="login" />
                            </label> 
                        </div>
                    </div>
                    <div class="BoxPlusieursChamps">
                        <div class="Entree">
                            <label class="input-label" for="mdpActuel"><p class="champTexte">Mot de passe actuel :  </p>
                                    <input class="entreeDeTexte" type="password" name="mdpActuel" />
                            </label> 
                        </div>
                        <div class="Entree">
                            <label class="input-label" for="nouveauMDP"><p class="champTexte">Nouveau mot de passe :  </p>
                                    <input class="entreeDeTexte" type="password" name="nouveauMDP" />
                            </label> 
                        </div>
                    </div>
                    

                </div>
                <div class="ConteneurInformationAvancee">
                    <div>
                        <hr>
                        <h2>Informations avancée</h2>
                    </div>
                    <div class="BoxPlusieursChamps">    
                        <div class="Entree">
                            <label class="input-label" for="mail"><p class="champTexte">Sexe :  </p>
                                    <input class="entreeDeTexte" type="charset" name="mail" />
                            </label> 
                        </div>
                        <div class="Entree">
                            <label class="input-label" for="DateDeNaissance"><p class="champTexte">Date de naissance :  </p>
                                    <input class="entreeDeTexte" type="charset" name="DateDeNaissance" />
                            </label> 
                        </div>
                    </div>
                    <div class="BoxPlusieursChamps">    
                        <div class="Entree">
                            <label class="input-label" for="Poids"><p class="champTexte">Poids (Kg) :  </p>
                                    <input class="entreeDeTexte" type="charset" name="Poids" />
                            </label> 
                        </div>
                        <div class="Entree">
                            <label class="input-label" for="Taille"><p class="champTexte">Taille (cm) :  </p>
                                    <input class="entreeDeTexte" type="charset" name="Taille" />
                            </label> 
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php'); ?></footer>
        
    </body>
</html>