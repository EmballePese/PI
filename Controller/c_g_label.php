<?php
session_start();
include('../Controller/c_variable_inscription.php');

if($check =="Check"){
	if(empty($lab)){
		$message="<h3>Vous n'avez rien remplis</h3>";
		include('../View/v_g_gerer.php');
	}else{

	if($lab[0]==" "||is_numeric($lab)){
			$message="<h3>Champ incorrect</h3>";
			include('../View/v_g_gerer.php');
		}else{
			include('../Model/m_g_label.php');
			if($exist==true){
				$message="<h3>Label déjà existant</h3>";
				include('../View/v_g_gerer.php');
			}else{
				$message="<h3>Le label a bien été ajouté</h3>";
				include('../View/v_g_gerer.php');
			}
		}
	}
}else{
include('../View/v_g_gerer.php');
}



?>
