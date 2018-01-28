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


$recov = $bdd->query('SELECT P.Nom,U.Mail as Fermier, L.Qte, A.Unite, C.Consommateur, C.id_cmd_vente 
					 FROM Cmd_vente C JOIN Ligne_cmd_vente L 
					 ON L.cmd_vente = C.id_cmd_vente 
					 JOIN Produit P 
					 ON L.Produit = P.id_produit 
					 JOIN Article A 
					 ON P.Article = A.id_article 
					 JOIN User U
					 ON U.id_user = A.Fermier
					 WHERE C.Paye = "non"');

$i = 0;
$a = 0;
while ($donnees = $recov->fetch()){
	$id = $donnees['id_cmd_vente'];
	if($id != $id_old){
		$i++;
		$a=0;
	}
	$tab[$i][$a]['id_cmd_vente'] = $donnees['id_cmd_vente'];
	$tab[$i][$a]['Nom'] = $donnees['Nom'];
	$tab[$i][$a]['Fermier'] = $donnees['Fermier'];
	$tab[$i][$a]['Qte'] = $donnees['Qte'];
	$tab[$i][$a]['Unite'] = $donnees['Unite'];
	$tab[$i][$a]['Consommateur'] = $donnees['Consommateur'];
	$id_old = $donnees['id_cmd_vente'];
	$a++;
}

$recov->closeCursor();
?>
