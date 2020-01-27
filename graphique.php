<?php
include_once("includes/AccesBase.php");
include_once("Modeles/fonction.php");
$idUser= $_SESSION['idUser'];
$i=0;
$req=$db->prepare("SELECT Type FROM `test` WHERE idUser='$idUser'");
$req->execute();
$ListeNomDeTest=$req->fetchall();
$cl=array_column($ListeNomDeTest,'Type');//on recupere que la colonne type
$indicateur=false;
$ListeDef=array_unique($cl);//on supprime les valeurs duppliquées
$ListeDef=array_values($ListeDef);//supressions des cases vides
$ListeALL= [];

function delete_col(&$array, $key)
		{
		    // Check that the column ($key) to be deleted exists in all rows before attempting delete
		    foreach ($array as &$row)   { if (!array_key_exists($key, $row)) { return false; } }
		    foreach ($array as &$row)   { unset($row[$key]); }

		    unset($row);

		    return true;
		}
for($i=0; $i<count($ListeDef); $i++){
	$ListeALL[$i]= recupDonn($db,$idUser, $ListeDef[$i]);
}
	function recupDonn($db,$idUser, $ty){
		$req=selectTest($db,$idUser,$ty)->fetchall();
		$data = array();
		
		delete_col($req, '0');
		delete_col($req, '1');
		$data=$req;
		return $data;
	}


/*if(array_key_exists('listeDeroulante', $_POST)){
	$indicateur=true;
	echo "im here";

	
}*/

include_once('Vues/graphique.vue.php');
?>