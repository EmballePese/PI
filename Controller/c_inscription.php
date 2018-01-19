<?php

include('c_variable_inscription.php');
if(empty($_POST['mdp'])|| empty($_POST['name'])|| empty($_POST['forename'])|| empty($_POST['tel'])|| empty($_POST['mail'])|| empty($_POST["type"])){

	$message="<h3 align='center'>Il manque des informations !</h3>";
	include('../View/v_inscription.php');
}else{
	if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
		$correct_mail = true;
	} else {
		$correct_mail = false;
	}
	if(strlen($tel)!=10||strlen($cp)!=5 && !empty($cp)){
		$message="<h3 align='center'>Champ(s) trop grand/petit</h3>";
		include('../View/v_inscription.php');
	}else if(!is_numeric($cp)&&!empty($cp) || !is_numeric($tel)||strpos($mdp, ' ') !== false||strpos($name, ' ') !== false||strpos($forename, ' ') !== false||strpos($city, ' ') !== false||strpos($cp, ' ') !== false||strpos($tel, ' ') !== false||strpos($mail, ' ') !== false){
		$message="<h3 align='center'>L'un des champs est incorrect</h3>";
		include('../View/v_inscription.php');
	}else if($correct_mail == false){
		$message="<h3 align='center'>Mail Incorrect</h3>";
		include('../View/v_inscription.php');
	}else{
		$status ="Actif";
		include('../Model/m_inscription.php');
		if($exist == true){
			$message="<h3 align='center'>Utilisateur dejà existant!</h3>";
			include('../View/v_inscription.php');
		}else{
			include('../View/v_confirmation_inscription.php');
		}
	}
}
?>
