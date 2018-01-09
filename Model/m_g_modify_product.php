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
$tab_m =array();
$recov = $bdd->query("SELECT * 
					  FROM Produit P JOIN Article A
					  ON P.Article = A.id_article
					  WHERE P.id_produit='$id'");
while ($donnees = $recov->fetch()){
$prix_total = ($donnees['Prix_achat']*$marge) + $donnees['Prix_achat'];
}
$bdd->exec("UPDATE Produit
			SET Nom ='$nom',Marge='$marge',Prix_total='$prix_total'
			WHERE id_produit='$id'");
include('../Controller/c_g_product.php');

?>
