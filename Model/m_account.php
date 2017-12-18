<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese2;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query("SELECT * FROM User WHERE Mail = '$user'");

$donnees = $recov->fetch();
$recov->closeCursor();

?>
