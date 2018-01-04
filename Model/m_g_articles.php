<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}
$tab = array();
$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Fermier,L.Label, A.Statut
					  FROM Article A JOIN Label L
					  ON A.Label = L.id_label
					  WHERE A.Statut = 'A vendre'");
while ($donnees = $recov->fetch()){
array_push($tab,$donnees);
}
$recov->closeCursor();
?>
