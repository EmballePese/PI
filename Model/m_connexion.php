<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM User');

$exist = FALSE;

while ($donnees = $recov->fetch()){
	if($mail == $donnees['Mail']){
    if($mdp == $donnees['Mdp']){
			$message = "Bienvenue ".$mail;
			$exist = TRUE;
    }
	}
	// print_r($donnees['nom']."<br>");
}

$recov->closeCursor();


?>
