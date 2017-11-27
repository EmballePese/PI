<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{	
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM jeux_video');
$exist = false;

while ($donnees = $recov->fetch()){
		if($user == $donnees['nom']){
			$message = "User already taken";
			$exist = true;
		} 
		
	// print_r($donnees['nom']."<br>");		
}

if($exist == false){

$bdd->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\''.$user.'\', \''.$mdp.'\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

$message = "Vous êtes inscrit sur notre magnifique site de vrac ! Votre utilisateur est : ".$user." et votre mdp est : ".$mdp." Ne les oubliez pas ! ;)
<form action=\"./v_connexion.php\">
<button>Retour à la page de connexion </button>";	

}

echo$message;
	
$recov->closeCursor();

	

?>