<?php
if(isset($_GET['name'])){
	$name = $_GET['name'];
}else{
	$name = "";
}
if(isset($_GET['forename'])){
	$forename = $_GET['forename'];
}else{
	$forename = "";
}
if(isset($_GET['adress'])){
	$adress = $_GET['adress'];
}else{
	$adress = "";
}
if(isset($_GET['mail'])){
	$mail = $_GET['mail'];
}else{
	$mail = "";
}
if(isset($_GET['cp'])){
	$cp = $_GET['cp'];
}else{
	$cp = "";
}
if(isset($_GET['city'])){
	$city = $_GET['city'];
}else{
	$city = "";
}
if(isset($_GET['tel'])){
	$tel = $_GET['tel'];
}else{
	$tel = "";
}
if(isset($_GET['mdp'])){
	$mdp = $_GET['mdp'];
}else{
	$mdp = "";
}
if(isset($_SESSION['a'])){
$a = $_SESSION['a'];
}else{
$a =0;
$_SESSION['a'] =0;
}
if(isset($_GET['quantity'])){
	$quantity = $_GET['quantity'];
}else{
	$quantity = 0;
}
if(isset($_GET['ajouter'])){
	$ajouter = $_GET['ajouter'];
}else{
	$ajouter = 0;
}
if(!isset($message)){
	$message = "";
}
?>
