<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$tab = array();
$tab_l =array();

$recov = $bdd->query("SELECT * FROM Article A
					  JOIN Label L
					  ON L.id_label = A.Label
					  WHERE A.id_article='$id'");
while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}

$recov = $bdd->query("SELECT * FROM Label");
while ($donnees = $recov->fetch()){
	array_push($tab_l,$donnees);
}

$recov->closeCursor();
?>
