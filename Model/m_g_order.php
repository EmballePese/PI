<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

for($i=0;$i<count($order);$i++){
	
$id_article = $order[$i]['id_article'];
$quantity = $order[$i]['quantity'];
$new_qte = $order[$i]['qte_restantes'] - $quantity;
$bdd->exec("UPDATE Article SET Statut='Achete',Qte_restantes='$new_qte',Qte_acheter='$quantity' WHERE id_article='$id_article'");
}
?>