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

// $recov = $bdd->query("SELECT * FROM Article");
// while ($donnees = $recov->fetch()){
	// array_push($tab,$donnees);
	// if($farm == $donnees['Fermier']&&stristr($name,$donnees['Nom']) != false){
		// if($compo ==
		// $exist = true;
	// }
// }
if($exist==false){
	
=======


>>>>>>> Stashed changes
$bdd->exec("UPDATE Article SET Composition='$compo', Nom='$name', DLC='$dlc', Date_crea='$dc', Prix_achat='$pa', Unite='$unite', Label='$lab', Qte_article='$qte',Qte_restantes='$qte' WHERE id_article='$id'");
}

// $recov->closeCursor();
?>
