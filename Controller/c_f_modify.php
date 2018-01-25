<?php
session_start();
include('../Controller/c_variable_inscription.php');
$id = $_POST['id_article'];
if($check == "check"){
	
	if(empty($_POST['name']) || empty($_POST['compo']) || empty($_POST['DLC']) || empty($_POST['dc']) || empty($_POST['qte']) || empty($_POST['pa']) || empty($_POST['qte'])){

		$message="<h3 align='center'>Il manque des informations !</h3>";
		include('../Model/m_f_modifyv.php');
		include('../View/v_f_modify.php');
		
	}else{

		if(!is_numeric($pa)||!is_numeric($qte)|| strpos($pa, ' ') !== false|| strpos($qte, ' ') !== false||strpos($marge, ' ') !== false||$name[0] ==" "||$compo[0] ==" "){
			$message="<h3 align='center'>L'un des champs est incorrect</h3>";
			include('../Model/m_f_modifyv.php');
			include('../View/v_f_modify.php');
		}else if($dc > $dlc){
			$message="<h3 align='center'>Mauvaises dates, veuillez les verifier</h3>";
			include('../Model/m_f_modifyv.php');
			include('../View/v_f_modify.php');
		}else{
			$name = strtolower($name);
			$unite = $_POST["unite"];
			$farm = $_SESSION['user'];
			include('../Model/m_f_modify.php');
			if($exist==true){
				$message="Article déjà mis en vente";
				include('../Model/m_f_modifyv.php');
				include('../View/v_f_modify.php');
			}else{
				$message="Article Modifier!";
				session_write_close();
				include('../Controller/c_f_ownp.php');
			}
		}
	}
	
}else{
	include('../Model/m_f_modifyv.php');
	include('../View/v_f_modify.php');
}
?>