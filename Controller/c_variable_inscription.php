<?php
if(isset($_POST['name'])){
	$name = $_POST['name'];
}else{
	$name = "";
}
if(isset($_POST['forename'])){
	$forename = $_POST['forename'];
}else{
	$forename = "";
}
if(isset($_POST['adress'])){
	$adress = $_POST['adress'];
}else{
	$adress = "";
}
if(isset($_POST['mail'])){
	$mail = $_POST['mail'];
}else{
	$mail = "";
}
if(isset($_POST['cp'])){
	$cp = $_POST['cp'];
}else{
	$cp = "";
}
if(isset($_POST['city'])){
	$city = $_POST['city'];
}else{
	$city = "";
}
if(isset($_POST['tel'])){
	$tel = $_POST['tel'];
}else{
	$tel = "";
}
if(isset($_POST['mdp'])){
	$mdp = $_POST['mdp'];
}else{
	$mdp = "";
}
if(isset($_POST['type'])){
	$type = intval($_POST['type']);
}else{
	$type = "";
}
if(isset($_SESSION['a'])){
$a = $_SESSION['a'];
}else{
$a =0;
$_SESSION['a'] =0;
}
if(isset($_POST['quantity'])){
	$quantity = $_POST['quantity'];
}else{
	$quantity = 0;
}
if(isset($_POST['ajouter'])){
	$ajouter = $_POST['ajouter'];
}else{
	$ajouter = 0;
}
if(!isset($message)){
	$message = "";
}
if(isset($_POST['line'])){
	$line = $_POST['line'];
}else{
	$line = "";
}
if(isset($_POST['op'])){
	$op = $_POST['op'];
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
if(isset($_POST['check'])){
	$check = $_POST['check'];
}else{
	$check = "no";
}
if(isset($_GET['check_p'])){
	$check_p= $_GET['check_p'];
}else{
	$check_p= "no";
}
if(isset($_POST['date'])){
	$date = $_POST['date'];
}else{
	$date = "";
}
if(isset($_GET['date_card'])){
	$date_card= $_GET['date_card'];
}else{
	$date_card= "";
}
if(isset($_GET['adress_p'])){
	$adress_p= $_GET['adress_p'];
}else{
	$adress_p= "";
}
if(isset($_GET['name_p'])){
	$name_p= $_GET['name_p'];
}else{
	$name_p= "";
}
if(isset($_GET['cp_p'])){
	$cp_p= $_GET['cp_p'];
}else{
	$cp_p= "";
}
if(isset($_GET['city_p'])){
	$city_p= $_GET['city_p'];
}else{
	$city_p= "";
}
if(!isset($message_processing)){
	$message_processing ="";
}if(!isset($message_pass)){
	$message_pass ="";
}
if(isset($_POST['change'])){
	$change = $_POST['change'];
}else{
	$change =  "";
}
if(isset($_GET['change'])){
	$change = $_GET['change'];
}else{
	$change =  "";
}
if(isset($_POST['verif'])){
	$verif = $_POST['verif'];
}else{
	$verif =  "";
}
if(isset($_GET['verif'])){
	$verif = $_GET['verif'];
}else{
	$verif =  "";
}
if(isset($_POST['modify'])){
	$modify = $_POST['modify'];
}else{
	$modify =  "";
}
if(isset($_GET['modify'])){
	$modify = $_GET['modify'];
}else{
	$modify =  "";
}
if(!isset($message_e)){
	$message_e ="";
}
if(isset($_POST['compo'])){
	$compo = $_POST['compo'];
}else{
	$compo = "";
}
if(isset($_POST['DLC'])){
	$dlc = $_POST['DLC'];
}else{
	$dlc = "";
}if(isset($_POST['dc'])){
	$dc = $_POST['dc'];
}else{
	$dc = "";
}if(isset($_POST['qte'])){
	$qte = $_POST['qte'];
}else{
	$qte = "";
}if(isset($_POST['pa'])){
	$pa = $_POST['pa'];
}else{
	$pa = "";
}if(isset($_POST['marge'])){
	$marge = $_POST['marge'];
}else{
	$marge = "";
}if(isset($_POST['lab'])){
	$lab = $_POST['lab'];
}else{
	$lab = "";
}if(isset($_POST['farm'])){
	$farm= $_POST['farm'];
}else{
	$farm= "";
}if(isset($_POST['sm'])){
	$sm= $_POST['sm'];
}else{
	$sm= "";
}
if(isset($_POST['idc'])){
	$idc= $_POST['idc'];
}else{
	$idc= "";
}
if(!isset($id_art)){
	$id_art = "";
}
if(isset($_POST['action'])){
	$action= $_POST['action'];
}else{
	$action= "";
}
if(isset($_POST['search'])){
	$search = $_POST['search'];
}else{
	$search = "";
}
if(isset($_POST['trier'])){
	$trier = $_POST['trier'];
}else{
	$trier = "";
}
if(isset($_POST['search_f'])){
	$search_f = $_POST['search_f'];
}else{
	$search_f = "";
}
?>
