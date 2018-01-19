<?php
session_start();
include('../Controller/c_variable_inscription.php');

$cat=$_POST['n_cat'];
$image = $_FILES['image']['name'];
$check=$_POST['check'];

if($check =="Check"){
	if(empty($cat)||empty($image)){
		$message="Il manque des champs";
		include('../View/v_g_gerer.php');
	}else{
		
	if($cat[0]==" "||is_numeric($cat)){
			$message="Champ Incorrect";
			include('../View/v_g_gerer.php');
		}else{
			$uploads_dir = '../Look/images';
			$tmp_name = $_FILES["image"]["tmp_name"];
			$name_image = $_FILES["image"]["name"];
			move_uploaded_file($tmp_name, "$uploads_dir/$name_image");
			$image=$uploads_dir."/".$name_image;
			include('../Model/m_g_categorie.php');
			if($exist==true){
				$message="Catégorie deja existantes";
				include('../View/v_g_gerer.php');
			}else{
				$message="La Catégorie a bien été ajouté";
				include('../View/v_g_gerer.php');
			}
		}
	}
}else{
include('../View/v_g_gerer.php');
}



?>