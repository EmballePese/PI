<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$exist=false;
$tab = array();

$recov = $bdd->query("SELECT * FROM Article");
while ($donnees = $recov->fetch()){
	if($farm == $donnees['Fermier'] && $name == $donnees['Nom']){
		$exist = true;
	}
}
if($exist==false){
$req = $bdd->prepare("INSERT INTO Article VALUES(0,:Composition,:Nom,:DLC,:Date_crea,:Prix_achat,:Unite,:Label,:Fermier,:Statut,:Qte_article,:Qte_restantes,:Qte_acheter)");
       $req->execute(array(
          "Composition" => $compo,
          "Nom" => $name,
          "DLC" => $dlc,
          "Date_crea" => $dc,
					"Prix_achat" => $pa,
					"Unite" => $unite,
					"Label" => $lab,
					"Fermier" => $farm,
					"Statut" => "A vendre",
					"Qte_article" => $qte,
					"Qte_restantes" => $qte,
					"Qte_acheter" => 0
					));
}

$recov->closeCursor();
?>
