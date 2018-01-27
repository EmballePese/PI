<?php
session_start();
include('../Controller/c_variable_inscription.php');
if(isset($_POST['order'])){
$_SESSION['order'] = $_POST['order'];
}
if($change == "adress"){
	
	if($meth =="1"){
		$message = "<h2>Veuillez indiquer vos coordonnées : </h2></br>
					<form action=\"c_order_modify.php\" method=\"GET\">
					<tr><td>Adresse</td> <td>:</td> <td><input type=\"text\" name=\"adress_p\" value=\"$adress_p\"></td></tr><p>
					<tr><td>Code postal</td>:<td>:</td><td><input type=\"text\"name=\"cp_p\" value=\"$cp_p\" maxlength=\"5\"></td></tr><p>
					<tr><td>Ville</td> <td>:</td> <td><input type=\"text\" name=\"city_p\"value=\"$city_p\"></td></tr><p>
					<input type=\"hidden\" name=\"change\"value=\"adress\">
					<input type=\"hidden\" name=\"verif\"value=\"no\">
					<input type=\"hidden\" name=\"meth\"value=\"1\">
					<button> Valider </button>
					<form>";

		$_SESSION['adresse'] = $adress_p.",".$cp_p.",".$city_p;
		$_SESSION['delivry'] = "House";
		if(!empty($adress_p)&&!empty($cp_p)&&!empty($city_p)&&is_numeric($cp_p)){
			header("Location:../Controller/c_order_modify.php?modify=1");
		}
	}else if($meth=="2"){
			$_SESSION['adresse'] = "74 bis Avenue Maurice Thorez, 94200 ,Ivry-sur-Seine";
			$_SESSION['delivry'] = "Market";
			header("Location:../Controller/c_order_modify.php?modify=1");
	}else{
		$message = "<h3> 1ere étape : Choix du Mode de Livraison </h3></br>

			<h2>Preferez-vous faire : </h2></br>
			<a href=\"../Controller/c_order_modify.php?change=adress&&meth=1\"<h1>Livraison à domicile</br></h1></a>
			<a href=\"../Controller/c_order_modify.php?change=adress&&meth=2\"<h1>Livraison en magasin</br></h1></a>
			</br>
			</br>
			Nous tenons à préciser que la livraison en magasin se fera au 74 bis Avenue Maurice Thorez, 94200 Ivry-sur-Seine";
	}
	
}else if($change =="cb"){
	
	if($check_p=="Check"){
		if(empty($name_p)||empty($date_card)||empty($cart1)||empty($cart2)||empty($cart3)||empty($cart4)||empty($crypt)){
			$message_e ="L'un des champs est vide";
		}else if(strpos($name_p,' ') !== false){
			$message_e ="Le nom est incorrect";
		}else if(!is_numeric($cart1)||!is_numeric($cart2)||!is_numeric($cart3)||!is_numeric($cart4)||!is_numeric($crypt)){
			$message_e ="Le cryptogramme ou la carte ne sont pas des chiffres";
		}else if(strlen($cart1)!=4||strlen($cart2)!=4||strlen($cart3)!=4||strlen($cart4)!=4||strlen($crypt)!=3){
			$message_e ="Le cryptogramme ou la carte ne contiennent pas assez de chiffre";
		}else{
			$_SESSION['cart4'] = $cart4;
			header("Location:../Controller/c_order_modify.php?modify=1");
		}
	}
		
	$message="Veuillez Entrez vos coordonnées bancaire ci dessous :
	<p>
	<form action=\"c_order_modify.php\" method=\"GET\">
	Votre Numero de carte : <input type=\"text\" name=\"cart1\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart2\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart3\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart4\" maxlength=\"4\" size=\"4\"/>
	<p>
	Date d'expiration : <input type=\"month\" name=\"date_card\" size=\"10\">
	<p>
	Cryptogramme : <input type=\"text\" name=\"crypt\" maxlength=\"3\" size=\"3\"/>
	<p>
	Nom du titulaire : <input type=\"text\" name=\"name_p\"/>
	<p>
	<input type=\"hidden\" name=\"change\" value=\"cb\">
	<input type=\"submit\" name=\"check_p\" value=\"Check\">
	</form>";
	
}

if($modify ==1){
$delivry = $_SESSION['delivry'];
$order = $_SESSION['order'];
include('../Model/m_order_modify.php');
header("Location:../View/v_order_modify_confirm.php");
}

include('../View/v_order_modify.php');
?>