<?php
session_start();
include('../Controller/c_variable_inscription.php');
if(isset($line) && isset($op))
{   
	if($op == "+" && $_SESSION['basket'][$line]['quantity'] < 20)
	{
		$_SESSION['basket'][$line]['quantity']++;
	}
	else if($op == "-" && $_SESSION['basket'][$line]['quantity'] > 0)
	{
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
	include('../View/v_basket_vide.php');
}else{
	$order = $_SESSION['basket'];
include('../View/v_basket.php');
}
?>
