<?php
include('../Controller/c_variable_inscription.php');
$id = $_POST['id'];
$nom = $_POST['Nom'];
$marge = $_POST['Marge'];
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}
$tab_m =array();
$recov = $bdd->query("SELECT * 
					  FROM Produit P JOIN Article A
					  ON P.Article = A.id_article
					  WHERE P.id_produit='$id'");
while ($donnees = $recov->fetch()){
$prix_total = $donnees['Prix_achat']*$marge;
}
$bdd->exec("UPDATE Produit
			SET Nom ='$nom',Marge='$marge',Prix_total='$prix_total'
			WHERE id_produit='$id'");
include('../Controller/c_g_product.php');

?>
