<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$recov = $bdd->query('SELECT * FROM User');

while ($donnees = $recov->fetch()){
	if($new_mail == $donnees['Mail'] && $donnees['Mail'] !== $email){
		$erreur = TRUE;
		$message = "<h3>l'adresse mail est déjà utilisée</h3>";
	}
}
	
?>
