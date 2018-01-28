<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$exist=false;

$recov = $bdd->query("SELECT * FROM User");
while ($donnees = $recov->fetch()){
	if($farm == $donnees['Mail']){
		$farm = $donnees['id_user'];
	}
}

$recov = $bdd->query("SELECT A.Nom,A.Composition,A.DLC,A.Date_crea,A.Prix_achat,A.Unite,L.Label,A.Statut,A.Qte_article,A.Qte_restantes,A.id_article
					  FROM Article A JOIN Label L
					  ON L.id_label = A.Label
					  JOIN User U
					  ON U.id_user = A.Fermier
					  WHERE A.Fermier = '$farm'");
while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}


$recov->closeCursor();
?>
