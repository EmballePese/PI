<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$bdd->exec("UPDATE cmd_vente
			SET Livre = '$delivry'
			WHERE id_cmd_vente = '$order'");
?>
