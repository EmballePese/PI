<?php

$mail = $_GET['mail'];
$mdp = $_GET['mdp'];

if(empty($_GET['mail'])|| empty($_GET['mdp'])){

	include('v_connexion.php');
	echo("Des champs sont vides !");

}else{

    include('m_connexion.php');
    if($exist == false){
    include('v_connexion.php');
    echo("Mauvais mot de passe ou login");
	} else{
		echo$message;
		}
}

?>
