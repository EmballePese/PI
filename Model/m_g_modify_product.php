<?php
include('../Controller/c_variable_inscription.php');
$id = $_GET['id'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}


$bdd->exec("UPDATE Produit
			SET Nom ='$nom',Marge='$marge'
			WHERE id_produit='$id'");
include('../Controller/c_g_product.php');

?>
