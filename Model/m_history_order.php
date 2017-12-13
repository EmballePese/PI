<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query("SELECT id_user
					  FROM User 
					  WHERE Mail ='$user'");
					  
	while ($donnees = $recov->fetch()){
			$id = $donnees['id_user'];
    }

$recov = $bdd->query("SELECT LC.* 
					  FROM Ligne_cmd_vente LC JOIN Cmd_vente C
					  ON LC.cmd_vente = C.id_cmd_vente
					  WHERE C.consommateur ='$id' AND C.Date_livraison >$date");
					  
	while ($donnees = $recov->fetch()){
			$order_processing[$i]= $donnees['id_ligne_cmd_vente'];
			$i++;
	}
	
$recov->closeCursor();

?>