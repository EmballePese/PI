<?php
session_start();
include('../Controller/c_variable_inscription.php');
$order_pass = array();
$order_processing = array();
$date=date("Y-m-d");
$i=0;
$user = $_SESSION['user'];
include('../Model/m_history_order.php');

if(empty($order_processing)){
	$message_processing ="Aucune commande en cours";
}

if(empty($order_pass)){
	$message_pass = "Aucune commande passée";
}
include('../View/v_history_order.php');
?>