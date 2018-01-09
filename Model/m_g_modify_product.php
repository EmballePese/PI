<?php
include('../Controller/c_variable_inscription.php');
$id = $_GET['id'];
$nom = $_GET['Nom'];
$marge = $_GET['Marge'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$prix_total = ($prix_achat*$marge) + $prix_achat;
$bdd->exec("UPDATE Produit
			SET Nom ='$nom',Marge='$marge',Prix='$prix_total'
			WHERE id_produit='$id'");
include('../Controller/c_g_product.php');

?>
