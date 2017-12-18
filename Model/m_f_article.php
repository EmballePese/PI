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

$recov = $bdd->query('SELECT * FROM Article');
while ($donnees = $recov->fetch()){
	if($farm == $donnees['Fermier']&&$name==$donnees['Nom']){
		$exist = true;
	}
}
if($exist==false){
$req = $bdd->prepare("INSERT INTO Article VALUES(0,:Composition,:Nom,:DLC,:Date_crea,:Prix_achat,:Label,:Fermier)");
         $req -> execute(array(
            "Composition" => $compo,
            "Nom" => $name,
            "DLC" => $dlc,
            "Date_crea" => $dc,
			"Prix_achat" => $pa,
			"Label" => $lab,
			"Fermier" => $farm
			));
}

$recov->closeCursor();
?>
