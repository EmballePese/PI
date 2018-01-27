<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}
if($check=="check"){
	$bdd->exec("UPDATE Cmd_vente
			SET Paye = 'oui'
			WHERE id_cmd_vente = '$idc'");
}


$recov = $bdd->query('SELECT P.Nom, A.Fermier, L.Qte, A.Unite, C.Consommateur, C.id_cmd_vente FROM Cmd_vente as C JOIN Ligne_cmd_vente as L ON L.cmd_vente = C.id_cmd_vente JOIN Produit as P ON L.Produit = P.id_produit JOIN Article as A ON P.Article = A.id_article WHERE C.Paye = "non"');

while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
}

$recov->closeCursor();
?>
