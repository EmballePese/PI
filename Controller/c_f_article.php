<?php
include('../Controller/c_variable_inscription.php');
$tab_l = array();
include('../Model/m_f_article_v.php');
if($check =="check"){
	if(empty($_GET['name'])&& empty($_GET['compo'])&& empty($_GET['DLC'])&& empty($_GET['dc'])&& empty($_GET['qte'])&& empty($_GET['pa'])&& empty($_GET['farm'])&& empty($_GET['lab'])){
		
		$message="<h3 align='center'>Il manque des informations !</h3>";
		include('../View/v_f_article.php');


	}else{
		
		if(!is_numeric($pa)|| strpos($pa, ' ') !== false||strpos($marge, ' ') !== false||$name[0] ==" "||$compo[0] ==" "||strpos($farm, ' ') !== false){
			$message="<h3 align='center'>L'un des champs est incorrect</h3>";
			include('../View/v_f_article.php');
		}else if($dc > $dlc){
			$message="<h3 align='center'>Mauvaises dates, veuillez les verifier</h3>";
			include('../View/v_f_article.php');
		}else{
			include('../Model/m_f_article.php');
			if($exist==true){
				$message="Article deja mis en vente";
				include('../View/v_f_article.php');
			}else{
			$message="Ajouter";
			include('../View/v_f_article.php');
			}
				
		}
	}
}else{
include('../View/v_f_article.php');
}
?>