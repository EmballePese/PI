<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$tab =array();
$tab_c = array();


$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Marge, A.Composition, A.Prix_achat,A.DLC,P.id_produit,P.Prix_total,A.Unite,T.Type
	FROM Produit P JOIN Type T 
	ON P.Type = T.id_type 
	JOIN Article A
	ON P.Article = A.id_article");

while ($donnees = $recov->fetch())
{
	array_push($tab,$donnees);
}

$recov = $bdd->query("SELECT * FROM Type");

while ($donnees = $recov->fetch())
{
	array_push($tab_c,$donnees);
}
$recov->closeCursor();
?>
