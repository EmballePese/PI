<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$tab = array();

$recov = $bdd->query("SELECT * FROM Article WHERE Statut='Achete'");
while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}
$exist=false;

for($i=0;$i<count($order);$i++){
	for($z=0;$z<count($tab);$z++){
		if($tab[$z]['id_article'] == $order[$i]['id_article']){
			$id_article = $tab[$z]['id_article'];
			$old_quantity = $order[$i]['quantity'];
			$quantity = intval($order[$i]['quantity']) + intval($tab[$z]['Qte_acheter']);
			$new_qte = $order[$i]['qte_restantes'] - $old_quantity;
			$bdd->exec("UPDATE Article SET Statut='Achete',Qte_restantes='$new_qte',Qte_acheter='$quantity' WHERE id_article='$id_article'");
			$exist=true;
		}
	}
	
	if($exist == false){
		$id_article = $order[$i]['id_article'];
		$quantity = $order[$i]['quantity'];
		$new_qte = $order[$i]['qte_restantes'] - $quantity;
		$bdd->exec("UPDATE Article SET Statut='Achete',Qte_restantes='$new_qte',Qte_acheter='$quantity' WHERE id_article='$id_article'");
	}
	
	if(empty($tab)){
		$id_article = $order[$i]['id_article'];
		$quantity = $order[$i]['quantity'];
		$new_qte = $order[$i]['qte_restantes'] - $quantity;
		$bdd->exec("UPDATE Article SET Statut='Achete',Qte_restantes='$new_qte',Qte_acheter='$quantity' WHERE id_article='$id_article'");
	}
}
?>