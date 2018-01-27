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
		$i = $_POST['i'];
		$id_article = $_POST['id_article'];
		$price_prod = $_POST['Price'];
		$unite = $_POST['Unite'];
		$price_total = $quantity*$price_prod;
		$exist=false;
		for($b=0;$b<=$a;$b++){
			if(isset($basket[$b])){
				if($basket[$b]['id_article'] == $id_article){
					$a = $b;
					$exist = true;
					break;
				}
			}
		}
		if($exist == true){
			$basket[$a]['quantity'] = $quantity + $basket[$a]['quantity'];
			if($basket[$a]['quantity']> $qte){
				$basket[$a]['quantity'] = intval($qte);
				$basket[$a]['price_tot'] = intval($qte)*$price_prod;
				$message = $message."Quantité maximum est de ".$qte.", vous ne pouvez pas en commander plus</br>";
			}else{
				$basket[$a]['price_tot'] = $price_total + $basket[$a]['price_tot'];
			}
		}else{
		$basket[$a]['price_tot'] = $price_total;
		$basket[$a]['quantity'] = $quantity;
		$basket[$a]['name'] = $tab[$i]['Nom']." de ".$tab[$i]['Fermier'];
		$basket[$a]['id_article'] = $id_article;
		$basket[$a]['qte_restantes'] = $tab[$i]['Qte_restantes'];
		$basket[$a]['unite'] = $unite;
		$_SESSION['a']++;
		$message ="<h3>Votre article a bien été ajouté</h3></br>";
		}
		$_SESSION['basket'] = $basket;

		}else{

		$message = "Vous devez vous connecter pour ajouter un article dans votre panier </br>";
		}
	}else{
		$message="Vous n'avez rien ajouté";
	}
}
include('../View/v_g_articles.php');

?>
