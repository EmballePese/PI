<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

for($i=0;$i<count($order);$i++){
	
$id_article = $order[$i]['id_article'];
$bdd->exec("UPDATE Article SET Statut='Achete' WHERE id_article='$id_article'");

}
?>