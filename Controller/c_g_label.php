<?php
session_start();
include('../Controller/c_variable_inscription.php');

if($check =="Check"){
	if(empty($lab)){
		include('../View/v_g_gerer.php');
		$message="Vous n'avez rien remplis";
	}else{
		
	if($lab[0]==" "||is_numeric($lab)){
			$message="Champ Incorrect";
			include('../View/v_g_gerer.php');
		}else{
			include('../Model/m_g_label.php');
			if($exist==true){
				$message="Label deja existant";
				include('../View/v_g_gerer.php');
			}else{
				$message="Le label a bien été ajouté";
				include('../View/v_g_gerer.php');
			}
		}
	}
}else{
include('../View/v_g_gerer.php');
}



?>