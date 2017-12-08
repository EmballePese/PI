<?php

$mail = $_GET['mail'];
$mdp = $_GET['mdp'];

if(empty($_GET['mail'])|| empty($_GET['mdp'])){

	include('../View/v_connexion.php');
	echo("<h3 align='center'>Mauvais mot de passe ou login</h3>");

}else{

    include('../Model/m_connexion.php');
    if($exist == false){
    include('../View/v_connexion.php');
    echo("<h3 align='center'>Mauvais mot de passe ou login</h3>");
	} else{	
		session_start();
		$_SESSION['user'] = $mail;
		header('Location: ../Index.php');
		}
}

?>
