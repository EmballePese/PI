<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}


	$recov = $bdd->query("SELECT id_user
					  FROM User
					  WHERE Mail ='$user'");

	while ($donnees = $recov->fetch()){
			$id = $donnees['id_user'];
    }

	$bdd->exec("INSERT INTO Cmd_vente VALUES (0,'$id','$paye','$delivry','$date_order','$date_delivry')");


	$recov = $bdd->query("SELECT *
						  FROM Produit");

	while ($donnees = $recov->fetch()){
			for($i=0;$i<count($order);$i++){
				if($order[$i]['name'] == $donnees['Nom']){
					$order[$i]['id'] = intval($donnees['id_produit']);
				}
			}
		}

	$recov = $bdd->query("SELECT C.id_cmd_vente
						  FROM Cmd_vente C JOIN User U
						  ON C.Consommateur = U.id_user
						  WHERE C.consommateur ='$id'");

	while ($donnees = $recov->fetch()){
			$id_cmd_vente = intval($donnees['id_cmd_vente']);
    }

	for($i=0;$i<count($order);$i++)
		{
			$prod_name = $order[$i]['id'];
			$quantity = $order[$i]['quantity'];
			$price = $order[$i]['price_tot'];

			$bdd->exec("INSERT INTO Ligne_cmd_vente VALUES (0,'$id_cmd_vente','$prod_name','$quantity','$price')");

		}

$z=0;
$taille = count($order);

	$recov = $bdd->query("SELECT * FROM Produit");

	while ($donnees = $recov->fetch()){
	if($z != $taille){
		if($order[$z]['name'] == $donnees['Nom']){
			$qty_stock = intval($donnees['Qte_stock']);
			$qty_basket = intval($order[$z]['quantity']);
			$new_qty = $qty_stock - $qty_basket;
			$nom = $donnees['Nom'];
			$bdd->exec("UPDATE Produit SET Qte_stock = '$new_qty' WHERE Nom = '$nom'");
			$z++;
		}
	}
}

$recov->closeCursor();

?>
