<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$recov = $bdd->query('SELECT * FROM Type');
$i=0;

while ($donnees = $recov->fetch()){
	$tab_t[$i]['name'] = $donnees['Type'];
	$tab_t[$i]['id'] = $donnees['id_type'];
	$i++;
}

$recov = $bdd->query("SELECT A.*, U.Mail as Fermier
					  FROM Article A JOIN User U
					  ON A.Fermier = U.id_user
					  WHERE Statut = 'Achete'");

while ($donnees = $recov->fetch()){
	array_push($tab_prod,$donnees);
}

$recov->closeCursor();
?>
