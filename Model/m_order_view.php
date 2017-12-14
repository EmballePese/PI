<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query("SELECT L.*,P.Nom,C.Livre
					  FROM Ligne_cmd_vente L JOIN Produit P
					  ON L.Produit = P.id_produit
					  JOIN Cmd_vente C
					  ON C.id_cmd_vente = L.cmd_vente
				      WHERE L.cmd_vente ='$order'");
	
while ($donnees = $recov->fetch()){
	$tab[$i]['name'] = $donnees['Nom'];
	$tab[$i]['quantity'] = $donnees['Qte'];
	$tab[$i]['price_tot'] = $donnees['Prix_facture'];
	$delivry = $donnees['Livre'];
	$i++;
   }
   
$recov->closeCursor();

?>