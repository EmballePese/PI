<?php
include('../Controller/c_variable_inscription.php');

if($check =="check"){
	include('../Model/m_g_verif_mail.php');
	if($idc=="3"){
		$message="<h3>Vous ne pouvez pas vous ban/suspendre/rendre actif vous meme !</h3>";
		include('../View/v_g_ban.php');
	}else if(empty($idc)){
		$message="<h3>L'utilisateur n'existe pas vous ne pouvez pas ban/suspendre/rendre actif un utilisateur non existant</h3>";
		include('../View/v_g_ban.php');
	}else{
		if($action =="ban"){
			include('../Model/m_g_ban.php');
			$message ="<h3>Le compte ".$mail." est banni</h3>";
			include('../View/v_g_ban.php');
			
		}else if($action =="suspendre"){
			include('../Model/m_g_ban.php');
			$message ="<h3>Le compte ".$mail." est suspendu</h3>";
			include('../View/v_g_ban.php');
			
		}else{
			include('../Model/m_g_ban.php');
			$message ="<h3>Le compte ".$mail." est de nouveau actif</h3>";
			include('../View/v_g_ban.php');
		}
	}
}else{
	include('../View/v_g_ban.php');
}



?>