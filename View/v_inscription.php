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
          <li><a href="../View/v_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <h1> Veuillez vous inscrire </h1>
    <table class="tab_center">
			<?php
		include('../Controller/c_variable_inscription.php');
		echo"<form action=\"../Controller/c_inscription.php\" method=\"GET\">
			<tr><td>Nom*</td> <td>:</td> <td><input type=\"text\" name=\"name\" value=\"$name\"></td></tr><p>
			<tr><td>Prenom*</td> <td>:</td> <td><input type=\"text\" name=\"forename\" value=\"$forename\"></td></tr><p>
			<tr><td>Adresse</td> <td>:</td> <td><input type=\"text\" name=\"adress\" value=\"$adress\"></td></tr><p>
			<tr><td>Code Postal</td> <td>:</td> <td><input type=\"text\"name=\"cp\" value=\"$cp\"></td></tr><p>
			<tr><td>Ville</td> <td>:</td> <td><input type=\"text\" name=\"city\"value=\"$city\"></td></tr><p>
			<tr><td>Mail*</td> <td>:</td> <td><input type=\"text\" name=\"mail\"value=\"$mail\"></td></tr><p>
			<tr><td>Mot de passe*</td> <td>:</td> <td><input type=\"password\" name=\"mdp\"value=\"$mdp\"></td></tr><p>
			<tr><td>Tel*</td> <td>:</td> <td><input type=\"text\" name=\"tel\"value=\"$tel\"></td></tr><p>
			<p>
			<tr><td colspan=2></td><td style=\"text-align:center;\"><button>Inscription</button></td></tr>
			Les champs * sont obligatoires
			</form>";
			echo $message;
			?>
    </table>
  </div>
</div>
</body>
</html>
