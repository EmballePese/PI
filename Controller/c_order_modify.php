<?php
session_start();
include('../Controller/c_variable_inscription.php');
if(isset($_GET['order'])){
$_SESSION['order'] = $_GET['order'];
}
if($change == "adress"){
	
	if($meth==1){
		$message ="<form action=\"c_order_modify.php\" method=\"get\">
				<tr><td>Adresse</td><td>:</td> <td><input type=\"text\" name=\"adress\" value=\"$adress\"></td></tr><p>
				<tr><td>Code Postal</td> <td>:</td> <td><input type=\"text\"name=\"cp\" value=\"$cp\"></td></tr><p>
				<tr><td>Ville</td> <td>:</td> <td><input type=\"text\" name=\"city\"value=\"$city\"></td></tr><p>
				<input type=\"hidden\" name=\"change\"value=\"adress\">
				<input type=\"hidden\" name=\"verif\"value=\"no\">
				<input type=\"hidden\" name=\"meth\"value=\"1\">
				<button> Valider </button>
				</form>";
				
		$_SESSION['adresse'] = $adress.",".$cp.",".$city;
		$_SESSION['delivry'] = "House";
		if(!empty($adress)&&!empty($cp)&&!empty($city)&&is_numeric($cp)){
			header("Location:../Controller/c_order_modify.php?modify=1");
		}else if($verif=="no"){
			$message_e ="Champs invalide";
		}
		
	}else if($meth==2){
			$_SESSION['adresse'] = "74 bis Avenue Maurice Thorez, 94200 ,Ivry-sur-Seine";
			$_SESSION['delivry'] = "Market";
			header("Location:../Controller/c_order_modify.php?modify=1");
	}else{
		$message="<a href=\"../Controller/c_order_modify.php?change=adress&meth=1\"<h1>Livraison à domicile</br></h1></a>
			<a href=\"../Controller/c_order_modify.php?change=adress&meth=2\"<h1>Livraison en magasin</br></h1></a>
			</br>
			</br>
			Nous tenons à préciser que la livraison en magasin se fera au 74 bis Avenue Maurice Thorez, 94200 Ivry-sur-Seine";
	}
	
}else if($change =="cb"){
	
	if($check=="Check"){
		if(empty($name)||empty($date||empty($cart1))||empty($cart2)||empty($cart3)||empty($cart4)||empty($crypt)){
			$message_e ="L'un des champs est vide";
		}else if(strpos($name,' ') !== false){
			$message_e ="Le nom est incorrect";
		}else if(!is_numeric($cart1)||!is_numeric($cart2)||!is_numeric($cart3)||!is_numeric($cart4)||!is_numeric($crypt)){
			$message_e ="Le cryptogramme ou la carte ne sont pas des chiffres";
		}else if(strlen($cart1)!=4||strlen($cart2)!=4||strlen($cart3)!=4||strlen($cart4)!=4||strlen($crypt)!=3){
			$message ="Le cryptogramme ou la carte ne contiennent pas assez de chiffre";
		}else{
			header("Location:../Controller/c_order_modify.php?modify=1");
		}
	}
	$message="Veuillez Entrez vos coordonnées bancaire ci dessous :
	<p>
	<form action=\"c_order.php\" method=\"get\">
	Votre Numero de carte : <input type=\"text\" name=\"cart1\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart2\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart3\" maxlength=\"4\" size=\"4\"/>/
	<input type=\"text\" name=\"cart4\" maxlength=\"4\" size=\"4\"/>
	<p>
	Date d'expiration : <input type=\"month\" name=\"date\" size=\"10\">
	<p>
	Cryptogramme : <input type=\"text\" name=\"crypt\" maxlength=\"3\" size=\"3\"/>
	<p>
	Nom du titulaire : <input type=\"text\" name=\"name\"/>
	<p>
	<input type=\"submit\" name=\"check\" value=\"Check\">
	<input type=\"hidden\" name=\"step\" value=\"2\">
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