<?php

    try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese2;charset=utf8', 'root', 'MonMySQL');
    }
    catch (Exception $e)
    {
    	die('Erreur : '. $e->getMessage());
    }

	var_dump($email,$adress,$cp,$city);

    $bdd->exec("UPDATE User
				SET Adresse='$adress',
				CP='$cp',
				Ville='$city'
				WHERE Mail ='$email'");
?>
