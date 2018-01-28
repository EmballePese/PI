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
if(empty($search)){
	if($trier =="prix_c"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0
							  ORDER BY P.Prix_total DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							 WHERE T.Type ='$cat' AND P.Qte_stock > 0
							  ORDER BY P.Prix_total ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0
							  ORDER BY P.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							WHERE T.Type ='$cat' AND P.Qte_stock > 0
							  ORDER BY P.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0");
	}
}else{
	if($trier =="prix_c"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0 AND P.nom='$search'
							  ORDER BY P.Prix_total DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0 AND P.nom='$search'
							  ORDER BY P.Prix_total ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0 AND P.nom='$search'
							  ORDER BY P.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0 AND P.nom='$search'
							  ORDER BY P.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT P.Nom, P.Qte_stock, P.Stock_mini, P.Prix_total, A.Composition,A.DLC,U.Mail as Fermier,P.id_produit,P.Photo,A.Unite
							  FROM Produit P JOIN Type T
							  ON P.Type = T.id_type
							  JOIN Article A
							  ON P.Article = A.id_article
							  JOIN User U
							  ON U.id_user = A.Fermier
							  WHERE T.Type ='$cat' AND P.Qte_stock > 0 AND P.nom='$search'");
	}
}
while ($donnees = $recov->fetch()){
array_push($tab,$donnees);
}
$recov->closeCursor();
?>
