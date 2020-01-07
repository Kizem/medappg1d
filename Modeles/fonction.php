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
function insertTest($db, $Date, $Code, $idUser){
	$req = $db->prepare("insert into test (Date,Code,idUser) values ('$Date','$Code','$idUser')");
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
	while($row = $req->fetch()) {
		echo "<tbody>
			<tr>
				<td>Température du corps</td>
				<td>Dernière valeur</td>";
			}
		
	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}
		
	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}
		
	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Temperature' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
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
    while($row = $req->fetch()) {
		echo "<tbody>
			<tr>
				<td>Perception auditive</td>
				<td>Dernière valeur</td>";
			}

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}

	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}

	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Perception' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
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
    while($row = $req->fetch()) {
		echo "<tbody>
			<tr>
				<td>Fréquence cardiaque</td>
				<td>Dernière valeur</td>";
			}

	$req = $db->prepare("SELECT MIN(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}

	$req = $db->prepare("SELECT AVG(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
	}

	$req = $db->prepare("SELECT MAX(Valeur) FROM capteur WHERE Type = 'Frequence' ");
	$req->execute();
	while($row = $req->fetch()) {	
		echo"<td>" . $row[0] . "</td>";
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


?>