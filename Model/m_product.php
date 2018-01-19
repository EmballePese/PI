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

	    while ($donnees = $recov->fetch()){
    		array_push($tab,$donnees);
    		}
$recov->closeCursor();
?>