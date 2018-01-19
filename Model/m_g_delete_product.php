<?php
include('../Controller/c_variable_inscription.php');
$id = $_POST['id'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}


$bdd->exec("DELETE FROM Produit
			WHERE id_produit='$id'");

include('../Controller/c_g_product.php');

?>
