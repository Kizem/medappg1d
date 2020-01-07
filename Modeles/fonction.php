<?php  
function insertUsers($db, $nom , $prenom, $mail, $mdp, $type, $pseudo){
	$req = $db->prepare("insert into utilisateur (Type,login,Mdp,Nom,Prenom,Mail) values ('$type','$pseudo','$mdp','$nom','$prenom','$mail')");
	$req->execute();
	
	return $req;
}
function insertCapteur($db, $type, $val_init, $seuil){
	$req = $db->prepare("insert into capteur (Type,Valeur,seuil) values ('$type','$val_init','$seuil')");
	$req->execute();
	
	return $req;
}
function insertTest($db, $Date, $Code, $idUser, $idBoitier,$Type){
	$req = $db->prepare("insert into test (Date,Code,idUser, idBoitier, Durée, Type) values ('$Date','$Code','$idUser','$idBoitier','$Date', '$Type')");
	$req->execute();
	
	return $req;
}

function mailDisponible($db, $mail){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE Mail='$mail'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		return FALSE;
	}
}
function capteurDisponible($db, $Capteur){
	$req = $db->prepare("SELECT * FROM capteur WHERE idCapteur='$Capteur'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetch();
		return $donnee["idCapteur"];
	}
}

function pseudoDisponible($db, $pseudo){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE login='$pseudo'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetch();
		return $donnee["idUser"];
	}
	
}
function tableauTestTemperature($db){
	
	echo "<table> 
			<thead> 
				<tr>
					<th> </th>
					<th>Dernière valeur</th>
					<th>Valeur minimale</th>
					<th>Valeur moyenne</th>
					<th>Valeur maximale</th></tr>
			</thead>";

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $request->fetch()) {
		echo "<tbody>
			<tr>
				<td>Fréquence cardiaque</td>
				<td>Dernière valeur</td>";
			}
		
	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}
		
	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}
		
	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}		
					
		echo "</tr></tbody></table>";			

}
function tableauTestPerception($db){
	
	echo "<table> 
			<thead> 
				<tr>
					<th> </th>
					<th>Dernière valeur</th>
					<th>Valeur minimale</th>
					<th>Valeur moyenne</th>
					<th>Valeur maximale</th></tr>
			</thead>";

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
    while($row = $request->fetch()) {
		echo "<tbody>
			<tr>
				<td>Fréquence cardiaque</td>
				<td>Dernière valeur</td>";

			}

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}

	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}

	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}		
			
		echo "</tr></tbody></table>";
				
}
function tableauTestFrequence($db) {
	
	echo "<table> 
			<thead> 
				<tr>
					<th> </th>
					<th>Dernière valeur</th>
					<th>Valeur minimale</th>
					<th>Valeur moyenne</th>
					<th>Valeur maximale</th></tr>
			</thead>";

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
    while($row = $request->fetch()) {
		echo "<tbody>
			<tr>
				<td>Fréquence cardiaque</td>
				<td>Dernière valeur</td>";



			}

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}

	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}

	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $request->fetch()) {	
		echo"<td>" . $row . "</td>";
	}		
			
		echo "</tr></tbody></table>";
	}

function detectionCode($db, $code){
	$req = $db->prepare("SELECT * FROM codeInscription WHERE id='$code'");
	$req->execute();
	return $req;
}

function lireCGU($db, $id){
	$req = $db->prepare("SELECT * FROM cgu WHERE idCGU='$id'");
	$req->execute();
	return $req;
}

function ecrireCGU($db, $id,$CGU,$ML){
	$CGU=addslashes($CGU);
	$ML=addslashes($ML);
	$req = $db->prepare("UPDATE `cgu` SET `idCGU`='$id',`MentionLegales`='$ML',`CGU`='$CGU'");
	$req->execute();
	return $req;
}

function changerNomTheme($db, $theme, $id){
	$theme=addslashes($theme);
	$req = $db->prepare("UPDATE 'thèmefaq' SET 'Theme'='$theme' WHERE 'id'='$id'");
	$req->execute();
	return $req;
}

function rechercheUtilisateur($db, $keyword){
	$req = $db->prepare("SELECT * FROM utilisateur WHERE Nom LIKE '%$keyword%' OR Prenom LIKE '%$keyword%' ORDER BY Nom");
	$req->execute();
	return $req;
}
function modificationInformationUtilisateur($db, $nouvelleInfo, $info, $id){
	$req = $db->prepare("UPDATE `utilisateur` SET $info='$nouvelleInfo' WHERE idUser='$id'");
	$req->execute();
	return $req;
	
}

function genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
{
 $chaine = '';
 $max = mb_strlen($listeCar, '8bit') - 1;
 for ($i = 0; $i < $longueur; ++$i) {
 $chaine .= $listeCar[random_int(0, $max)];
 }
 return $chaine;
}
function getTest($db){
	$req = $db->prepare(addslashes("SELECT * FROM `utilisateur` t1 INNER JOIN `test` t2 ON t1.idUser = t2.idUser ORDER BY  t2.Date DESC"));
	$req->execute();
	return $req;
}

/* ------ Création d'entité/boitier */

function entiteDisponible($db, $nom){
	$req = $db->prepare("SELECT * FROM entite WHERE Nom='$nom'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetch();
		return $donnee["idEntité"];
	}
	
}

/* ------ A MODIFIER */

function gestionnaireDisponible($db, $pseudo){

	$req = $db->prepare("SELECT * FROM utilisateur WHERE login='$pseudo'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		return FALSE;
	}

}
?>