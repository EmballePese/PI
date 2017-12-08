<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mon compte</title>
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
<?php
	$user = $donnees['Prenom'];
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
	 <form action="../Controller/c_deconnexion.php">
		<input type="Submit" value="Deconnexion">
	</form> 
	</br>
	 <form action="../Controller/c_desinscription.php">
		<tr><td>Adresse mail</td> <td>:</td> <td><input type="text" name="mail"></td></tr></br>
        <tr><td>Mot de passe</td> <td>:</td> <td><input type="text" name="mdp"></td></tr></br>
		<input type="Submit" value="Se desinscrire">
	</form> 

  </div>
</div>
</body>
</html>
