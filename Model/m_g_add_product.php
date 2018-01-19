<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

move_uploaded_file($img_tmp_name, "$uploads_dir/$img_name");

$exist=false;
$id_article = $_POST['id_article'];
$recov = $bdd->query("SELECT *
				      FROM Produit P JOIN Article A
					  WHERE P.Article = '$id_article'
					  ");

while ($donnees = $recov->fetch()){
	if(!empty($donnees)){
		$exist = true;
	}
}

$recov = $bdd->query("SELECT *
				      FROM Article 
					  WHERE id_article = '$id_article'
					  ");

while ($donnees = $recov->fetch()){
	$prix_achat = $donnees['Prix_achat'];
	if($donnees['Qte_restantes'] == "0"){
		$bdd->exec("UPDATE Article SET Statut='Vendu' WHERE id_article='$id_article'");
	}else{
		$bdd->exec("UPDATE Article SET Statut='Partiellement achete' WHERE id_article='$id_article'");
	}	
}

if($exist == true){
	$recov = $bdd->query("SELECT *
				      FROM Produit P JOIN Article A
					  WHERE P.Article = '$id_article'
					  ");
		 while ($donnees = $recov->fetch()){
		$qte_new = intval($donnees['Qte_stock']) + $qte;
		 }
	$bdd->exec("UPDATE Produit SET Qte_stock='$qte_new' WHERE Article='$id_article'");
}else{
	$prix_total = $prix_achat*$marge;
$req = $bdd->prepare("INSERT INTO Produit VALUES(0,:Type,:Article,:Nom,:Qte_stock,:Stock_mini,:Marge,:Prix_total,:Photo)");
       $req -> execute(array(
            "Type" => $type,
            "Article" => $id_article,
            "Nom" => $name,
            "Qte_stock" => $qte,
			"Stock_mini" => $sm,
			"Marge" => $marge,
			"Prix_total" => $prix_total,
			"Photo" => "$uploads_dir/$img_name"
			));
}
$recov->closeCursor();
?>
