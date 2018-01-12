<?php
session_start();
include('../Controller/c_variable_inscription.php');
if(isset($line) && isset($op))
{   
	if($op == "+" && $_SESSION['basket'][$line]['quantity'] < $_SESSION['basket'][$line]['qte_restantes'])
	{
		$_SESSION['basket'][$line]['price_tot'] += ($_SESSION['basket'][$line]['price_tot'] / $_SESSION['basket'][$line]['quantity']);	
		$_SESSION['basket'][$line]['quantity']++;
	}
	else if($op == "-" && $_SESSION['basket'][$line]['quantity'] > 0)
	{
		$_SESSION['basket'][$line]['price_tot'] -= ($_SESSION['basket'][$line]['price_tot'] / $_SESSION['basket'][$line]['quantity']);          
		$_SESSION['basket'][$line]['quantity']--;
		if($_SESSION['basket'][$line]['quantity'] == 0)
		{
			unset($_SESSION['basket'][$line]);
			$_SESSION['basket'] = array_values($_SESSION['basket']);
			$_SESSION['a']--;
		}
	}	
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