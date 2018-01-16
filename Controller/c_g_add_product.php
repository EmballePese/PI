<?php
include('../Controller/c_variable_inscription.php');
$tab_t = array();
$tab_prod = array();
if($check =="check"){
	if(empty($_GET['marge'])&&empty($_GET['type'])){

		$message="<h3 align='center'>Il manque des informations !</h3>";
		include('../View/v_g_add_product.php');


	}else{

		if(!is_numeric($qte) || !is_numeric($marge)|| strpos($qte, ' ') !== false||strpos($marge, ' ') !== false){
			$message="<h3 align='center'>L'un des champs est incorrect</h3>";
			include('../View/v_g_add_product.php');
		}else{
			include('../Model/m_g_add_product.php');
			$message="Article ajouté !";
			include('../Model/m_g_add_product_v.php');
			include('../View/v_g_add_product.php');
			}

		}
}else{
include('../Model/m_g_add_product_v.php');
include('../View/v_g_add_product.php');
}
?>
