<?php
session_start();
include('../Controller/c_variable_inscription.php');
$order = $_SESSION['basket'];
for($i=0;$i<count($order);$i++){

	$price_htc += $order[$i]['price_tot'];

}
$price_ttc = $price_htc*1.2;

if($step == 2){
	 $_SESSION['basket'] ="";
	 $_SESSION['a'] =0;
	$message="<h2> Votre demande d'achat aupres du ou des fermiers est confirmé</h3></br>";
	include('../View/v_g_order2.php');
}else{
	include('../View/v_g_order.php');
}


?>
