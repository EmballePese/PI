<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', '');
}
catch (Exception $e)
{	
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM jeux_video');
$exist = false;

while ($donnees = $recov->fetch()){
		if($user == $donnees['mail']){
			$message = "User already taken";
			$exist = true;
		} 
		$donnees["id_user"] = 
	// print_r($donnees['nom']."<br>");		
}

if($exist == false){

$bdd->exec('INSERT INTO user(Categorie, Nom, Prenom, Adresse, CP, Ville, Tel, Mail, Mdp) VALUES(2,\''.$name.'\', \''.$forename.'\', \''.$adress.'\', \''.$cp.'\',\''.$city.'\',\''.$tel.'\',\''.$mail.'\',\''.$mdp.'\',)');

$message = "Vous êtes inscrit sur notre magnifique site de vrac ! Votre mdp est : ".$mdp." Ne les oubliez pas ! ;)
<form action=\"./v_connexion.php\">
<button>Retour à la page de connexion </button>";	

}

echo$message;
	
$recov->closeCursor();

	

?>