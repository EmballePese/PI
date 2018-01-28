<?php
session_start();
include('../Controller/c_variable_inscription.php');
$tab=array();
include('../Model/m_g_confirm_order.php');

if(empty($tab)){
	$message="<h3>Aucune commande n'est à valider</h3>";
}
if($check=="check"){
	include('../Model/m_g_confirm_order.php');
	$message="<h3>Commande validée</h3>";
	header('Location:../Controller/c_g_confirm_order.php');
}
include('../View/v_g_confirm_order.php');
?>
