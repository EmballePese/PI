<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM User');

$exist = FALSE;
$fermier = FALSE;
$gerant = FALSE;
$status = TRUE;

while ($donnees = $recov->fetch()){
	if($mail == $donnees['Mail']){
		if(sha1($mdp) == $donnees['Mdp']){
			$message = "Bienvenue ".$mail;
			$exist = TRUE;
		}
		if($donnees['Categorie'] == 1){
			$fermier = TRUE;
		}
		if($donnees['Categorie'] == 3){
			$gerant = TRUE;
		}
		if($donnees['Status'] =="Ban"||$donnees['Status'] =="Suspendu"){
			$status= false;
		}
	}
	// print_r($donnees['nom']."<br>");
}

$recov->closeCursor();


?>
