<?php
session_start();
include('../Controller/c_variable_inscription.php');
$tab = array();
$i=0;
$order = $_GET['order'];
include('../Model/m_order_view.php');
if($delivry='Market'){
	$message ="Magasin";
}else{
	$message ="A domicile";
}
include('../View/v_order_view.php');
?>