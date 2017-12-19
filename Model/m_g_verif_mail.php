<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM User');

while ($donnees = $recov->fetch()){
	if($mail==$donnees['Mail']){
		$idc=$donnees['Categorie'];
	}
}
	
?>
