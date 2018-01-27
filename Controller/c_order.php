<?php
session_start();
include('../Controller/c_variable_inscription.php');
if($step == "1"){

	if($meth =="1"){
		$message = "<h2>Veuillez indiquer vos coordonnées : </h2></br>
					<form action=\"c_order.php\" method=\"GET\">
					<tr><td>Adresse</td> <td>:</td> <td><input type=\"text\" name=\"adress_p\" value=\"$adress_p\"></td></tr><p>
					<tr><td>Code postal</td>:<td>:</td><td><input type=\"text\"name=\"cp_p\" value=\"$cp_p\" maxlength=\"5\"></td></tr><p>
					<tr><td>Ville</td> <td>:</td> <td><input type=\"text\" name=\"city_p\"value=\"$city_p\"></td></tr><p>
					<input type=\"hidden\" name=\"step\"value=\"1\">
					<input type=\"hidden\" name=\"meth\"value=\"1\">
					<button> Valider </button>
					<form>";

		$_SESSION['adresse'] = $adress_p.",".$cp_p.",".$city_p;
		$_SESSION['delivry'] = "House";
		if(!empty($adress_p)&&!empty($cp_p)&&!empty($city_p)&&is_numeric($cp_p)){
			header("Location:../Controller/c_order.php?step=2");
		}
	}else if($meth=="2"){
			$_SESSION['adresse'] = "74 bis Avenue Maurice Thorez, 94200 ,Ivry-sur-Seine";
			$_SESSION['delivry'] = "Market";
			header("Location:../Controller/c_order.php?step=2");
	}else{
		$message = "<h3> 1ere étape : Choix du Mode de Livraison </h3></br>

			<h2>Preferez-vous faire : </h2></br>
			<a href=\"../Controller/c_order.php?step=1&meth=1\"<h1>Livraison à domicile</br></h1></a>
			<a href=\"../Controller/c_order.php?step=1&meth=2\"<h1>Livraison en magasin</br></h1></a>
			</br>
			</br>
			Nous tenons à préciser que la livraison en magasin se fera au 74 bis Avenue Maurice Thorez, 94200 Ivry-sur-Seine";
	}
	include('../View/v_order1.php');

} else if($step == "2"){
	if($check_p=="Check"){
		if(empty($name_p)||empty($date_card)||empty($cart1)||empty($cart2)||empty($cart3)||empty($cart4)||empty($crypt)){
			$message ="L'un des champs est vide";
		}else if(strpos($name_p,' ') !== false){
			$message ="Le nom est incorrect";
		}else if(!is_numeric($cart1)||!is_numeric($cart2)||!is_numeric($cart3)||!is_numeric($cart4)||!is_numeric($crypt)){
			$message ="Le cryptogramme ou la carte ne sont pas des chiffres";
		}else if(strlen($cart1)!=4||strlen($cart2)!=4||strlen($cart3)!=4||strlen($cart4)!=4||strlen($crypt)!=3){
			$message ="Le cryptogramme ou la carte ne contiennent pas assez de chiffre";
		}else{
			$_SESSION['cart4'] = $cart4;
			header("Location:../Controller/c_order.php?step=3&cart4=".$cart4."&date=".$date_card);
		}
	}
	include('../View/v_order2.php');

}else if($step == "3"){

	$order = $_SESSION['basket'];
	for($i=0;$i<count($order);$i++){

		$price_htc += $order[$i]['price_tot'];

	}
	$price_ttc = $price_htc*1.2;
	include('../View/v_order3.php');

}else if($step =="4"){
	$date_order =date("Y-m-d");
	$date_delivry = date("Y-m-d",strtotime("$date_order + 3 day"));
	$user = $_SESSION['user'];
	$paye="non";
	$order = $_SESSION['basket'];
	$delivry =$_SESSION['delivry'];
	include('../Model/m_order.php');
	 $_SESSION['basket'] ="";
	 $_SESSION['a'] =0;
	$message="<h2> Merci d'avoir choisi Emballé-pesé !</h3></br>";
	if($delivry =="House"){
		$message2 = "Vous receverez au plus tard votre commande le ".$date_delivry.".";
	}else{
		$message2 = "Vous pourrez récuperer au plus tard votre commande le ".$date_delivry.".";
	}
	include('../View/v_order4.php');

}
?>
