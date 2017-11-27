<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{	
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM jeux_video');
$exist = false;

while ($donnees = $recov->fetch()){
		if($user == $donnees['nom']){
            if($mdp == $donnees['possesseur']){
			$message = "Bienvenue ".$user;
			$exist = true;
            }
		} 
		
	// print_r($donnees['nom']."<br>");		
}


echo$message;
	
$recov->closeCursor();
	

?>
