<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

if($action=="ban"){
	$bdd->exec("UPDATE User
			SET Status = 'Ban'
			WHERE Mail = '$mail'");
}else if($action=="suspendre"){
		$bdd->exec("UPDATE User
			SET Status = 'Suspendu'
			WHERE Mail = '$mail'");
}else{
	$bdd->exec("UPDATE User
			SET Status = 'Actif'
			WHERE Mail = '$mail'");
}
	
?>
