<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query('SELECT * FROM Label');
$exist =false;

while ($donnees = $recov->fetch()){
	if(strtolower($lab) == strtolower($donnees['Label'])){
		$exist=true;
	}
}

if($exist==false){
	$req = $bdd->prepare("INSERT INTO Label VALUES(0,:Label)");
       $req -> execute(array(
            "Label" => $lab,
			));
	
}
$recov->closeCursor();
?>
