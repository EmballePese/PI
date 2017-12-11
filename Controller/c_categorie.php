<?php
session_start();

if($_SESSION['a'] == 0){
$a=0;
}else{
$a = $_SESSION['a'];
}

$cat = $_GET['cat'];

include('../Model/m_categorie.php');
$i=0;
foreach($tab as $key => $value){
	$tab[$i]['Prix_total'] = ($tab[$i]['Prix_achat']*$tab[$i]['Marge']) + $tab[$i]['Prix_achat'];
	$i++;
}

if(isset($_GET['quantity'])){
	$quantity = $_GET['quantity'];
}else{
	$quantity = 0;
}
if(isset($_GET['Ajouter'])){
	$Ajouter = $_GET['Ajouter'];
}else{
	$Ajouter = 0;
}

include('../View/v_categorie.php');

if($Ajouter == true){
	if(isset($_SESSION['user'])){
		if(isset($_SESSION['basket'])){
			$basket =$_SESSION['basket'];
		}else{
			$basket = array();
		}
	$i = $_GET['i'];
	$price_prod = $_GET["Price".$tab[$i]['Nom']];
	$price_total = $quantity*$price_prod;
	$exist=false;
	for($b=0;$b<=$a;$b++){
		if($basket[$b]['name'] == $tab[$i]['Nom']){
			$a = $b;
			$exist = true;
			break;
		}
	}
	if($exist == true){
		$basket[$a]['quantity'] = $quantity + $basket[$a]['quantity'];
		if($basket[$a]['quantity']> 20){
			$basket[$a]['quantity'] = 20;
			$basket[$a]['price_tot'] = 20*$price_prod;
			echo"Quantité maximum est de 20, Vous ne pouvez pas en commander plus";
		}else{
		$basket[$a]['price_tot'] = $price_total + $basket[$a]['price_tot'];
		}
	}else{
	$basket[$a]['price_tot'] = $price_total;
	$basket[$a]['quantity'] = $quantity;
	$basket[$a]['name'] = $tab[$i]['Nom'];
	$_SESSION['a']++;
	}
	$_SESSION['basket'] = $basket;
		
		var_dump($_SESSION['basket']);
		
		echo"<h3>Votre Article a bien été ajouté</h3>";
	}else{
		
	echo"Vous devez vous connecter pour ajouter un article dans votre panier";
	}
}
?>