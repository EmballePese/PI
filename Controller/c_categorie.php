<?php
session_start();

include('../Controller/c_variable_inscription.php');
$cat = $_POST['cat'];
include('../Model/m_categorie.php');
$i=0;

if($ajouter == true){
if(is_numeric($quantity)){
		if(isset($_SESSION['user'])){
			if(isset($_SESSION['basket'])){
				$basket =$_SESSION['basket'];
			}else{
				$basket = array();
			}
		$i = $_POST['i'];
		$qte_max = $_POST['qte_max'];
		$id_produit = $_POST['id_produit'];
		$price_prod = $_POST['Price'];
		$unite = $_POST['Unite'];
		$price_total = $quantity*$price_prod;
		$exist=false;
		for($b=0;$b<=$a;$b++){
			if(isset($basket[$b])){
				if($basket[$b]['id_produit'] == $id_produit){
					$a = $b;
					$exist = true;
					break;
				}
			}
		}
		if($exist == true){
			$basket[$a]['quantity'] = $quantity + $basket[$a]['quantity'];
			if($basket[$a]['quantity']> 20){
				$basket[$a]['quantity'] = 20;
				$basket[$a]['price_tot'] = 20*$price_prod;
				$message = $message."Quantité maximum est de 20, Vous ne pouvez pas en commander plus</br>";
			}else{
				$basket[$a]['price_tot'] = $price_total + $basket[$a]['price_tot'];
			}
		}else{
			if($quantity > $qte_max){
				$basket[$a]['quantity'] = $qte_max;
				$basket[$a]['price_tot'] = $qte_max*$price_prod;
				$basket[$a]['name'] = $tab[$i]['Nom']." de ".$tab[$i]['Fermier'];
				$basket[$a]['id_produit'] = $id_produit;
				$basket[$a]['qte_max'] = $qte_max;
				$basket[$a]['unite'] = $unite;
				$_SESSION['a']++;
				$message ="<h3>Votre Article a bien été ajouté mais nous avons du restreindre votre stock vu que la quantité maximum sur les stocks a été atteint</h3></br>";
			}else if($quantity > 20&&$unite=="piece"){
				$basket[$a]['quantity'] = 20;
				$basket[$a]['price_tot'] = 20*$price_prod;
				$basket[$a]['name'] = $tab[$i]['Nom']." de ".$tab[$i]['Fermier'];
				$basket[$a]['id_produit'] = $id_produit;
				$basket[$a]['qte_max'] = $qte_max;
				$basket[$a]['unite'] = $unite;
				$_SESSION['a']++;
				$message ="<h3>Votre Article a bien été ajouté mais nous avons du restreindre votre stock vu que la quantité maximum d'achat est de 20 pour les produits en unité piece</h3></br>";
				}else if($quantity > 10&&$unite!="piece"){
				$basket[$a]['quantity'] = 10;
				$basket[$a]['price_tot'] = 10*$price_prod;
				$basket[$a]['name'] = $tab[$i]['Nom']." de ".$tab[$i]['Fermier'];
				$basket[$a]['id_produit'] = $id_produit;
				$basket[$a]['qte_max'] = $qte_max;
				$basket[$a]['unite'] = $unite;
				$_SESSION['a']++;
				$message ="<h3>Votre Article a bien été ajouté mais nous avons du restreindre votre stock vu que la quantité maximum d'achat est de 10 pour les produits en unité kilogrammes ou litres</h3></br>";
			}else{
				$basket[$a]['price_tot'] = $price_total;
				$basket[$a]['quantity'] = $quantity;
				$basket[$a]['name'] = $tab[$i]['Nom']." de ".$tab[$i]['Fermier'];
				$basket[$a]['id_produit'] = $id_produit;
				$basket[$a]['qte_max'] = $qte_max;
				$basket[$a]['unite'] = $unite;
				$_SESSION['a']++;
				$message ="<h3>Votre Article a bien été ajouté</h3></br>";
			}
		}
		$_SESSION['basket'] = $basket;

		}else{

		$message = "Vous devez vous connecter pour ajouter un article dans votre panier </br>";
		}
	}else{
		$message="Vous n'ajoutez rien";
	}
}
include('../View/v_categorie.php');
?>
