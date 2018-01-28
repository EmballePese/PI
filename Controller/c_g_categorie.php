<?php
session_start();
include('../Controller/c_variable_inscription.php');

$cat=$_POST['n_cat'];
$image = $_FILES['image']['name'];
$check=$_POST['check'];

if($check =="Check"){
	if(empty($cat)||empty($image)){
		$message="<h3>Il manque des informations</h3>";
		include('../View/v_g_gerer.php');
	}else{

	if($cat[0]==" "||is_numeric($cat)){
			$message="<h3>Champ incorrect</h3>";
			include('../View/v_g_gerer.php');
		}else{
			$uploads_dir = '../Look/images';
			$tmp_name = $_FILES["image"]["tmp_name"];
			$name_image = $_FILES["image"]["name"];
			move_uploaded_file($tmp_name, "$uploads_dir/$name_image");
			$image=$uploads_dir."/".$name_image;
			include('../Model/m_g_categorie.php');
			if($exist==true){
				$message="<h3>Catégorie déjà existante</h3>";
				include('../View/v_g_gerer.php');
			}else{
				$message="<h3>La catégorie a bien été ajoutée</h3>";
				include('../View/v_g_gerer.php');
			}
		}
	}
}else{
include('../View/v_g_gerer.php');
}



?>
