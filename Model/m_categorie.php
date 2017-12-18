<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese2;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}
$tab =array();
$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Marge, A.Composition, A.Prix_achat,A.DLC
					  FROM Produit P JOIN Type T
					  ON P.Type = T.id_type
					  JOIN Article A
					  ON P.Article = A.id_article
					  WHERE T.Type ='$cat'");
while ($donnees = $recov->fetch()){
array_push($tab,$donnees);
}
$recov->closeCursor();
?>
