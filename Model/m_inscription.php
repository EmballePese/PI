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
$exist = false;

while ($donnees = $recov->fetch()){
		if($mail == $donnees['Mail']){
			$message = "User already taken";
			$exist = true;
		} 	
}

if($exist == false){

$bdd->exec("INSERT INTO User VALUES (0,2,'$name','$forename','$adress','$cp','$city','$tel','$mail','$mdp')");

$message = "Vous êtes inscrit sur notre magnifique site de vrac ! Votre mdp est : ".$mdp." Ne l'oubliez pas ! ;)

<form action=\"../View/v_connexion.php\">
<button>Retour à la page de connexion </button>";	

}

echo$message;
	
$recov->closeCursor();

	

?>
