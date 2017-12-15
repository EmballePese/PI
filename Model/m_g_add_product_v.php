<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM Type');
$i=0;

while ($donnees = $recov->fetch()){
	$tab_t[$i]['name'] = $donnees['Type'];
	$tab_t[$i]['id'] = $donnees['id_type'];
	$i++;
}
$recov->closeCursor();
?>