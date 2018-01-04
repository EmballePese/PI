<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$exist=false;

$recov = $bdd->query("SELECT A.Nom,A.Composition,A.DLC,A.Date_crea,A.Prix_achat,L.Label
					  FROM Article A JOIN LABEL L
					  ON L.id_label = A.Label
					  WHERE A.Fermier = '$farm'");
while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}


$recov->closeCursor();
?>
