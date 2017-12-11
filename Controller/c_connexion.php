<?php

$mail = $_GET['mail'];
$mdp = $_GET['mdp'];

if(empty($_GET['mail'])|| empty($_GET['mdp'])){
	$message = "<h3 align='center'>Mauvais mot de passe ou login</h3>";
	include('../View/v_connexion.php');

}else{

    include('../Model/m_connexion.php');
    if($exist == false){
    $message = "<h3 align='center'>Mauvais mot de passe ou login</h3>";
	include('../View/v_connexion.php');
	} else{	
		session_start();
		$_SESSION['user'] = $mail;
		header('Location: ../Index.php');
		}
}

?>
