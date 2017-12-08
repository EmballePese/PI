<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - About</title>
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
          <li class="selected"><a href="../Index.html">A propos</a></li>
          <li><a href="v_product.php">Articles</a></li>
          <li><a href="v_basket.php">Mon panier</a></li>
          <li><a href="v_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
<?php
	echo "<h3>Vous êtes connecté(e) sous $user</h3>";
	echo("Vos informations personelles <br><br>");
	echo("Nom : ".$donnees['Nom']."<br>");
	echo("Prenom : ".$donnees['Prenom']."<br>");
	echo("Adresse : ".$donnees['Adresse']."<br>");
	echo("Code Postal : ".$donnees['CP']."<br>");
	echo("Ville : ".$donnees['Ville']."<br>");
	echo("Tel : ".$donnees['Tel']."<br>");
	echo("Mail : ".$donnees['Mail']."<br>");

?>
  </div>
</div>
</body>
</html>
