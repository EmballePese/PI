<?php
session_start();
include('../Controller/c_variable_inscription.php');
$tab_l = array();
include('../Model/m_f_article_v.php');
$farm = $_SESSION['user'];
if($check =="check"){
	if(empty($_POST['name'])&& empty($_POST['compo'])&& empty($_POST['DLC'])&& empty($_POST['dc'])&& empty($_POST['qte'])&& empty($_POST['pa'])&& empty($_POST['lab'])&& empty($_POST['qte'])){

		$message="<h3 align='center'>Il manque des informations !</h3>";
		include('../View/v_f_article.php');


	}else{

		if(!is_numeric($pa)||!is_numeric($qte)|| strpos($pa, ' ') !== false|| strpos($qte, ' ') !== false||strpos($marge, ' ') !== false||$name[0] ==" "||$compo[0] ==" "){
			$message="<h3 align='center'>L'un des champs est incorrect</h3>";
			include('../View/v_f_article.php');
		}else if($dc > $dlc){
			$message="<h3 align='center'>Mauvaises dates, veuillez les verifier</h3>";
			include('../View/v_f_article.php');
		}else{
			$name = strtolower($name);
			$unite = $_POST["unite"];
			include('../Model/m_f_article.php');
			if($exist==true){
				$message="Article déjà mis en vente";
				include('../View/v_f_article.php');
			}else{
			$message="Nouvel article ajouté !";
			include('../View/v_f_article.php');
			}

		}
	}
}else{
include('../View/v_f_article.php');
}
?>
