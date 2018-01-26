<?php
session_start();
include('../Controller/c_variable_inscription.php');

if(isset($_POST['modify'])){
	$qte = $_POST['qte'];
	$line = $_POST['line'];
	$price = ($_SESSION['basket'][$line]['price_tot'] / $_SESSION['basket'][$line]['quantity']);
	$_SESSION['basket'][$line]['price_tot'] = $price*$qte;
	$_SESSION['basket'][$line]['quantity'] = $qte;
	
}
if(empty($_SESSION['basket']))
{	
	$message = "<h3>Votre panier est vide ;(</h3>";
	include('../View/v_g_basket_vide.php');
}else{
	$order = $_SESSION['basket'];
	for($i=0;$i<count($order);$i++){
		
		$price_htc += $order[$i]['price_tot'];
		
	}
		$price_ttc = $price_htc*1.2;
	include('../View/v_g_basket.php');
}
?>