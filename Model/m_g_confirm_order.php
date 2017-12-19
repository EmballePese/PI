<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}
if($check=="check"){
	$bdd->exec("UPDATE cmd_vente
			SET Paye = 'oui'
			WHERE id_cmd_vente = '$idc'");
}


$recov = $bdd->query('SELECT * 
					  FROM Cmd_vente
					  WHERE Paye="non"');
while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}

$recov->closeCursor();
?>
