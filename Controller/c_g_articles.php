<?php
session_start();
include('../Controller/c_variable_inscription.php');

include('../Model/m_g_articles.php');
if(empty($tab)){
	
	$message = "Aucune proposition en vente";
}
if($ajouter == true){
if(is_numeric($quantity)){
		if(isset($_SESSION['user'])){
			if(isset($_SESSION['basket'])){
				$basket =$_SESSION['basket'];
			}else{
				$basket = array();
			}
		$i = $_GET['i'];
		$price_prod = $_GET["Price"];
		$price_total = $quantity*$price_prod;
		$exist=false;
		for($b=0;$b<=$a;$b++){
			if(isset($basket[$b])){
				if($basket[$b]['name'] == $tab[$i]['Nom']){
					$a = $b;
					$exist = true;
					break;
				}
			}
		}
		if($exist == true){
			$basket[$a]['quantity'] = $quantity + $basket[$a]['quantity'];
			if($basket[$a]['quantity']> 200){
				$basket[$a]['quantity'] = 200;
				$basket[$a]['price_tot'] = 200*$price_prod;
				$message = $message."Quantit� maximum est de 200, Vous ne pouvez pas en commander plus</br>";
			}else{
				$basket[$a]['price_tot'] = $price_total + $basket[$a]['price_tot'];
			}
		}else{
		$basket[$a]['price_tot'] = $price_total;
		$basket[$a]['quantity'] = $quantity;
		$basket[$a]['name'] = $tab[$i]['Nom'];
		$_SESSION['a']++;
		$message ="<h3>Votre Article a bien �t� ajout�</h3></br>";
		}
		$_SESSION['basket'] = $basket;

		}else{

		$message = "Vous devez vous connecter pour ajouter un article dans votre panier </br>";
		}
	}else{
		$message="Vous n'ajoutez rien";
	}
}
include('../View/v_g_articles.php');

?>	