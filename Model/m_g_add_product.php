<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$exist=false;

$recov = $bdd->query("SELECT *
				      FROM Article
					  WHERE Fermier ='$farm' AND Nom='$name'
					  ");

while ($donnees = $recov->fetch()){
	$id_art = $donnees['id_article'];
	$prix_achat = $donnees['Prix_achat'];
}

if(empty($id_art)){
	$exist = true;
}

$recov = $bdd->query("SELECT * FROM Produit");
while ($donnees = $recov->fetch()){
	if($id_art == $donnees['Article']){
		$exist = true;
		break;
	}
}

if($exist==false){
	$prix_total = ($prix_achat*$marge) + $prix_achat;
$req = $bdd->prepare("INSERT INTO Produit VALUES(0,:Type,:Article,:Nom,:Qte_stock,:Stock_mini,:Marge,:Prix_total)");
       $req -> execute(array(
            "Type" => $type,
            "Article" => $id_art,
            "Nom" => $name,
            "Qte_stock" => $qte,
			"Stock_mini" => $sm,
			"Marge" => $marge,
			"Prix_total" => $prix_total,
			));
}

$recov->closeCursor();
?>
