<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Inscription</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Look/style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div id="menu">
      <div class="logo">
        <ul>
		  <li><a href="">Statut : à venir</a></li>
          <li class="selected"><a href="../Index.php">A propos</a></li>
		  <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <h3> 2ème étape : Paiement </h3></br>
	Veuillez Entrez vos coordonnées bancaire ci dessous :
	<p>
	<form action="c_order.php" method="get">
	Votre Numero de carte : <input type="text" name="cart1" maxlength="4" size="4"/>/
	<input type="text" name="cart2" maxlength="4" size="4"/>/
	<input type="text" name="cart3" maxlength="4" size="4"/>/
	<input type="text" name="cart4" maxlength="4" size="4"/>
	<p>
	Date d'expiration : <input type="month" name="date" size="10">
	<p>
	Cryptogramme : <input type="text" name="crypt" maxlength="3" size="3"/>
	<p>
	Nom du titulaire : <input type="text" name="name"/>
	<p>
	<input type="submit" name="check" value="Check">
	<input type="hidden" name="step" value="2">
</form>
<?php
echo$message;
var_dump($_GET['adress']);
var_dump($cp);
var_dump($city);
var_dump($_SESSION['adresse']);
?>
    <table class="tab_center">
    </table>
  </div>
</div>
</body>
</html>