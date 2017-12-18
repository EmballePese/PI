<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}


$recov = $bdd->query('SELECT * FROM Label');
$i=0;

while ($donnees = $recov->fetch()){
	$tab_l[$i]['name'] = $donnees['Label'];
	$tab_l[$i]['id'] = $donnees['id_label'];
	$i++;
}
$recov->closeCursor();
?>
