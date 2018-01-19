<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->POSTMessage());
}

$recov = $bdd->query('SELECT * FROM Type');
$exist =false;

while ($donnees = $recov->fetch()){
	if(strtolower($cat) == strtolower($donnees['Type']&&stristr($cat,$donnees['Type']) != false)){
		$exist=true;
	}
}

if($exist==false){
	$req = $bdd->prepare("INSERT INTO Type VALUES(0,:Cat,:Image)");
       $req -> execute(array(
            "Cat" => $cat,
			"Image" => $image
			));
	
}
$recov->closeCursor();
?>
