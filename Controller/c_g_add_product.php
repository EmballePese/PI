<?php
include('../Controller/c_variable_inscription.php');
$tab_t = array();
include('../Model/m_g_add_product_v.php');
if($check =="check"){
	if(empty($_GET['name'])&&empty($_GET['qte'])&& empty($_GET['sm'])&& empty($_GET['marge'])&&empty($_GET['type'])&&empty($_GET['farm'])){
		
		$message="<h3 align='center'>Il manque des informations !</h3>";
		include('../View/v_g_add_product.php');


	}else{
		
		if(!is_numeric($qte) || !is_numeric($marge)|| !is_numeric($sm)||strpos($qte, ' ') !== false||strpos($marge, ' ') !== false||strpos($sm, ' ') !== false||strpos($farm, ' ') !== false||$name[0] ==" "){
			$message="<h3 align='center'>L'un des champs est incorrect</h3>";
			include('../View/v_g_add_product.php');
		}else{
			include('../Model/m_g_add_product.php');
			if($exist == true){
				$message="Produit deja sur le site ou inconnu dans la liste des ventes articles";
				include('../View/v_g_add_product.php');
			}else{
			$message="Ajouter";
			include('../View/v_g_add_product.php');
			}
				
		}
	}
}else{
include('../View/v_g_add_product.php');
}
?>