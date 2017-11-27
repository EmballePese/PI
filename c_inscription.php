<?php

include('variable_inscription.php');

if(empty($_GET['user'])|| empty($_GET['mdp'])|| empty($_GET['name'])|| empty($_GET['forename'])|| empty($_GET['adress'])|| empty($_GET['city'])|| empty($_GET['cp'])|| empty($_GET['tel'])|| empty($_GET['mail'])){
	
	include('v_inscription.php');
	echo"Il manque des informations !";
	
}else{
	
	if(!is_numeric($cp) || !is_numeric($tel)){
		include('v_inscription.php');
		echo"L'un des champs est incorrect";
	}else{
		include('m_inscription.php');
		if($exist == true){
		include('v_inscription.php');
		}
	}
		
}

?>