<?php

$mail = $_POST['mail'];
$mdp = $_POST['mdp'];

if(empty($_POST['mail'])|| empty($_POST['mdp'])){
	$message = "<h3 align='center'>Mauvais mot de passe ou login</h3>";
	include('../View/v_connexion.php');

}else{

    include('../Model/m_connexion.php');
    if($exist == false){
		$message = "<h3 align='center'>Mauvais mot de passe ou login</h3>";
		include('../View/v_connexion.php');
	} else if($status == false){	
		$message = "<h3 align='center'>Votre compte a été ban ou suspendu Contacter le gerant pour en savoir plus</h3>";
		include('../View/v_connexion.php');
	} else if($fermier == TRUE){	
		session_start();
		$_SESSION['user'] = $mail;
		header('Location: ../Index_fermier.php');
	} else if($gerant == TRUE){
		session_start();
		$_SESSION['user'] = $mail;
		header('Location: ../Index_gerant.php');
	} else {
		session_start();
		$_SESSION['user'] = $mail;
		header('Location: ../Index.php');
	}
}

?>
