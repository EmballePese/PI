<?php
include('../Controller/c_variable_inscription.php');
// $id_article = $_POST['id_article'];
// $name = $_POST['name'];
// $qte = $_POST['qte'];
// $id_article = $_POST['id_article'];
// $farm = $_POST['farm'];
// $type = $_POST['type'];
// $sm = $_POST['sm'];
// $marge = $_POST['marge'];
// $check = $_POST['check'];
$tab_t = array();
$tab_prod = array();
if($check =="check"){
	$uploads_dir = '../Look/images';
			$img_tmp_name = $_FILES['image']['tmp_name'];
			$img_name = $_FILES['image']['name'];
	if(empty($_POST['marge'])&&empty($_POST['type'])||empty($img_tmp_name)){

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
