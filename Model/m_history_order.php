<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$recov = $bdd->query("SELECT id_user
					  FROM User
					  WHERE Mail ='$user'");

	while ($donnees = $recov->fetch()){
			$id = $donnees['id_user'];
    }

$recov = $bdd->query("SELECT *
					  FROM Cmd_vente
					  WHERE Consommateur ='$id' AND Date_livraison >'$date'");

	while ($donnees = $recov->fetch()){
		$order_processing[$i]['id_cmd_vente'] = $donnees['id_cmd_vente'];
		$order_processing[$i]['Paye'] = $donnees['Paye'];
			$i++;
	}
	$recov = $bdd->query("SELECT *
					  FROM Cmd_vente
					  WHERE Consommateur ='$id' AND '$date' > Date_livraison");
	$i=0;
	while ($donnees = $recov->fetch()){
			$order_pass[$i]= $donnees['id_cmd_vente'];
			$i++;
	}

$recov->closeCursor();

?>
