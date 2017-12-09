<?php
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
	$i = $_GET['i'];
	$price_prod = $_GET["Price".$tab[$i]['Nom']];
	$price_total = $quantity*$price_prod;
	
	echo"Votre Article a bien été ajouté";
	echo $tab[$i]['Nom']." commandé ".$quantity." coutent ".$price_total;
	
}
?>