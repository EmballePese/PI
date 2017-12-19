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
if(isset($_GET['type'])){
	$type = intval($_GET['type']);
}else{
	$type = "";
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
if(isset($_GET['line'])){
	$line = $_GET['line'];
}else{
	$line = "";
}
if(isset($_GET['op'])){
	$op = $_GET['op'];
}else{
	$op = "";
}
if(!isset($price_htc)){
	$price_htc = "";
}
if(isset($_GET['step'])){
	$step = $_GET['step'];
}else{
	$step = "";
}
if(isset($_GET['meth'])){
	$meth = $_GET['meth'];
}else{
	$meth = "";
}
if(isset($_GET['cart1'])){
	$cart1 = $_GET['cart1'];
}else{
	$cart1 = "";
}
if(isset($_GET['cart2'])){
	$cart2 = $_GET['cart2'];
}else{
	$cart2 = "";
}
if(isset($_GET['cart3'])){
	$cart3 = $_GET['cart3'];
}else{
	$cart3 = "";
}
if(isset($_GET['cart4'])){
	$cart4 = $_GET['cart4'];
}else{
	$cart4 = "";
}
if(isset($_GET['crypt'])){
	$crypt = $_GET['crypt'];
}else{
	$crypt = "";
}
if(isset($_GET['check'])){
	$check = $_GET['check'];
}else{
	$check = "no";
}
if(isset($_GET['date'])){
	$date = $_GET['date'];
}else{
	$date = "";
}
if(!isset($message_processing)){
	$message_processing ="";
}if(!isset($message_pass)){
	$message_pass ="";
}
if(isset($_GET['change'])){
	$change = $_GET['change'];
}else{
	$change =  "";
}
if(isset($_GET['verif'])){
	$verif = $_GET['verif'];
}else{
	$verif =  "";
}
if(isset($_GET['modify'])){
	$modify = $_GET['modify'];
}else{
	$modify =  "";
}
if(!isset($message_e)){
	$message_e ="";
}
if(isset($_GET['compo'])){
	$compo = $_GET['compo'];
}else{
	$compo = "";
}
if(isset($_GET['DLC'])){
	$dlc = $_GET['DLC'];
}else{
	$dlc = "";
}if(isset($_GET['dc'])){
	$dc = $_GET['dc'];
}else{
	$dc = "";
}if(isset($_GET['qte'])){
	$qte = $_GET['qte'];
}else{
	$qte = "";
}if(isset($_GET['pa'])){
	$pa = $_GET['pa'];
}else{
	$pa = "";
}if(isset($_GET['marge'])){
	$marge = $_GET['marge'];
}else{
	$marge = "";
}if(isset($_GET['lab'])){
	$lab = $_GET['lab'];
}else{
	$lab = "";
}if(isset($_GET['farm'])){
	$farm= $_GET['farm'];
}else{
	$farm= "";
}if(isset($_GET['sm'])){
	$sm= $_GET['sm'];
}else{
	$sm= "";
}
if(isset($_GET['idc'])){
	$idc= $_GET['idc'];
}else{
	$idc= "";
}
if(!isset($id_art)){
	$id_art = "";
}
if(isset($_GET['action'])){
	$action= $_GET['action'];
}else{
	$action= "";
}
?>
