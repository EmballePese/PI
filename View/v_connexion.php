<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Connexion</title>
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
          <li><a href="../View/v_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <h1> Veuillez vous connecter </h1>
    <table class="tab_center">
      <form action="../Controller/c_connexion.php" method="GET">
        <tr><td>Adresse mail</td> <td>:</td> <td><input type="text" name="mail"></td></tr>
        <tr><td>Mot de passe</td> <td>:</td> <td><input type="password" name="mdp"></td></tr>
        <tr><td colspan=2></td><td style="text-align:center;"><button>Connexion</button></td></tr>
      </form>
    </table>
    <p> Pas encore de compte ? Vous pouvez vous inscrire en cliquant <a href="../View/v_inscription.php"> ici</a>.</p>
	<?php
	include('../Controller/c_variable_inscription.php');
	echo$message;
	?>
  </div>
</div>
</body>
</html>
