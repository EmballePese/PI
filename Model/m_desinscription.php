<?php
	try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
    }
    catch (Exception $e)
    {
    	die('Erreur : '. $e->POSTMessage());
    }

	$recov = $bdd->query('SELECT * FROM User');

	    while ($donnees = $recov->fetch()){
    		if($mail == $donnees['Mail']&&$mdp==$donnees['Mdp']){
    			 $bdd->exec("DELETE FROM User WHERE Mail = '$mail' AND Mdp = '$mdp'");
					 $exist = true;
    		}
    }

	$recov->closeCursor();

?>
