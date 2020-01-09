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
	$req = $db->prepare("SELECT * FROM codeInscription WHERE code='$code'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetchall();
		return $donnee;
	}
	
}

function lireCGU($db, $id){
	$req = $db->prepare("SELECT * FROM cgu WHERE idCGU='$id'");
	$req->execute();
	return $req;
}
function login($db, $pseudo){
	$req = $db->prepare ("SELECT * FROM Utilisateur WHERE  login= '$pseudo'");
	$req->execute ();
	return $req;
}
function inserUsersEntite($db, $idUser, $idEntite){
	$req = $db->prepare("INSERT INTO `utilisateur/entit` (idUser,idEntité) values ('$idUser','$idEntite')");
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

// function entiteDisponible($db, $nom){
// 	$req = $db->prepare("SELECT * FROM entit WHERE Nom='$nom'");
// 	$req->execute();
// 	if($req->rowCount() == 0){
// 		return TRUE;
// 	}
// 	else{
// 		$donnee=$req->fetch();
// 		return $donnee["idEntité"];
// 	}
	
// }

function gestionnaireDisponible($db, $pseudo){

	$req = $db->prepare("SELECT * FROM utilisateur WHERE (Type='Gestionnaire') AND (idBoitier!='NULL')");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		return FALSE;
	}

}

function boitierDisponible($db, $ref){

	$req = $db->prepare("SELECT * FROM boitier WHERE Reference='$ref'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetch();
 		return $donnee["idBoitier"];
	}

}

function entiteDisponible($db, $entite){

	$req = $db->prepare("SELECT * FROM entite WHERE idEntité='$entite'");
	$req->execute();
	if($req->rowCount() == 0){
		return TRUE;
	}
	else{
		$donnee=$req->fetch();
 		return $donnee["idEntité"];
	}

}
function insertBoitier($db, $ref){

	$req = $db->prepare("insert into boitier (Reference) values ('$ref')");
	$req->execute();

	return $req;
}

function insertEntite($db, $nom , $adresse, $type){
	$req = $db->prepare("insert into entit (Type,Nom,Adresse) values ('$type','$nom','$adresse')");
	$req->execute();
	
	return $req;
}

function majGestionnaire($db, $pseudo, $boitier){

	$req = $db->prepare("UPDATE utilisateur SET idBoitier='$boitier' WHERE (login='$pseudo')");
	$req->execute();

	return $req;

}

function majEntite($db, $boitier, $entite){

	$req = $db->prepare("UPDATE entit SET idBoitier='$boitier' WHERE (idEntité='$entite'");
	$req->execute();

	return $req;

}

/*-------------------*/

function getCodeEntite($db, $idEntite){
	$req = $db->prepare("SELECT * FROM `codeinscription` WHERE idEntité='$idEntite'");
	$req->execute();
	return $req;
}
function deleteCodeInscription($db, $id){
	$req = $db->prepare("DELETE FROM `codeinscription` WHERE idCodeInscription='$id'");
	$req->execute();
	return $req;
}

function addCodeUtilisateur($db, $code,$idEntité, $fonction){
	$req = $db->prepare("INSERT INTO `codeinscription`(`fonction`, `code`, `idEntité`) VALUES ('$fonction','$code','$idEntité')");
	$req->execute();
	return $req;
}
?>