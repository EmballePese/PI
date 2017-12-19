<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles</title>
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
          <li class="selected"><a href="../Index_gerant.php">Accueil</a></li>
		  <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
	<h2>Voici les Articles en vente sur votre site :</h2></br>
<table class="tab_center" cellpadding="5">
<tr><th>Nom</th>
<th>Quantité stock</th>
<th>Compositions</th>
<th>Date limite de consommation</th>
<th>Marge</th>
<th>Prix vente</th></tr>


<form action="../Controller/c_modification.php" method=GET>
    <tr><td>Adresse</td> <td>:</td> <td><input type="text" name="adress" <?php echo("value=\"".$donnees['Adresse']."\"");?>></td></tr></br>
	    <tr><td>Code Postal</td> <td>:</td> <td><input type="text" name="cp" <?php echo("value=\"".$donnees['CP']."\"");?>></td></tr></br>
		    <tr><td>Ville</td> <td>:</td> <td><input type="text" name="city" <?php echo("value=\"".$donnees['Ville']."\"");?>></td></tr></br>
			        <input type="Submit" value="Modifier">
					    </form>

<?php
for($i=0;$i<count($tab);$i++){
		echo"<tr><td>".$tab[$i]['Nom']."</td>";
		echo"<td>".$tab[$i]['Qte_stock']."</td>";
		echo"<td>".$tab[$i]['Composition']."</td>";
		echo"<td>".$tab[$i]['DLC']."</td>";
		echo"<td>".$tab[$i]['Marge']."</td>";
		$prix = $tab[$i]['Prix_achat']*$tab[$i]['Marge'];
		echo"<td>".$prix."€</td></tr>";
	}
	echo $message;
?>
</table>
	</br>
  </div>
</div>
</body>
</html>
