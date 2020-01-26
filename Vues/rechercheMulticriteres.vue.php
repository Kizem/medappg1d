<!DOCTYPE HTML>
<html>
  <head>
        <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="design/rechercheMulticriteres.css">
  <title>Recherche Multicriteres</title>

  </head>
  <body>
    <header><?php include_once('includes/header.php'); ?></header>
    <div class="boxtotale">
      <div class="titre">
        <h2>Recherche Multicritères</h2>
      </div>
      <form method="post" action="rechercheMulticriteres.php"> 
        <div class="conteneurChamp">
          <label class="input-label"><p class="champTexte" >Type d'utilisateur* :</p>
            
              <SELECT class="liste" name="listeDeroulante" size="1">
                <OPTION value="Utilisateur">Utilisateur</OPTION>
                <?php 
                if($_SESSION['Type']=="Administrateur"){
                    echo "<OPTION value=\"Gestionnaire\">Gestionnaire</OPTION>
                <OPTION value=\"Administrateur\">Administrateur</OPTION>";
                }?>
                
                </SELECT>
              </div>
            
          
        <div class="conteneurChamp">
          <label class="input-label" for="Taille"><p class="champTexte">Taille (cm) :  </p>
              <input class="entreeDeTexte" type="number" name="Taille" />
        </div>
        <div class="conteneurChamp">
          <label class="input-label" for="Poids"><p class="champTexte">Poids (kg) :  </p>
              <input class="entreeDeTexte" type="number" name="Poids" />
        </div>
        <div class="conteneurChamp">
          <label class="input-label" for="sexe"><p class="champTexte">Sexe :  </p>
              <SELECT class="entreeDeTexte" name="listeSexe" size="1" >
                <OPTION value="Tout">Tout</OPTION>  
                <OPTION value="Homme">Homme</OPTION>
                <OPTION value="Femme">Femme</OPTION>
                <OPTION value="Autre">Autre</OPTION>
                </SELECT> 
        </div>
        <div class="conteneurChamp">
             <input class="boutonValider" type="submit" value="Rechercher">
        </div>
      </form>
      <div class="ConteneurTable">
        <table style="width:80%">
          <thead>
          <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Pseudo</th>
              <th>Adresse E-mail</th>
            </tr>
            </thead>
            
            <tbody>
            <?php 
            if(!empty($fonction)){


              if (count($fonction) > 0) {
                for ($i=0; $i < count($fonction); $i++) {
                  echo "<tr>";
                  echo "<td>";
                  echo $fonction[$i]['Nom'], ' ';
                  echo "</td>";
                  echo "<td>";
                  echo $fonction[$i]['Prenom'], ' ';
                  echo "</td>";
                  echo "<td>";
                  echo $fonction[$i]['login'], ' ';
                  echo "</td>";
                  echo "<td>";
                  echo $fonction[$i]['Mail'], ' ',"<br>";
                  echo "</td>";
                  echo "</tr>";
                }
              }
            else{
              echo "Aucun utilisateurs trouvés.";
            }
          }
            ?>
            </tbody>
            
        </table>
      </div>
    </div>
    
    <footer><?php include_once('includes/footer.php'); ?></footer>
  </body>
</html>