<?php
session_start();
include('../Controller/c_variable_inscription.php');
$tab=array();
include('../Model/m_g_confirm_order.php');

if(empty($tab)){
	$message="Aucune Commande n'est en cours";
}
if($check=="check"){
	include('../Model/m_g_confirm_order.php');
	$message="Commande validé";
	header('Location:../Controller/c_g_confirm_order.php');
}
include('../View/v_g_confirm_order.php');
?>