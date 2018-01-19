<!DOCTYPE html>
<html>
  <head>
    <title>Emballé-pesé</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../Look/style.css" />
  </head>
  <body>
    <div id="main">
      <div id="header">
        <img id="logo" src="../Look/images/logo_accueil.png">
        <ul>
          <li><a href="../Index.php">Accueil</a></li>
          <li><a href="../Controller/c_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h3> Récapitulatif de la commande </h3>
      	<?php

      		echo("<table class=\"tab_center\">
      		<tr>
      		<th>Nom</th>
      		<th>Prix</th>
      		<th>Quantité</th>
      		</tr>
      		");
      		echo"</br>";
      	for($i=0;$i<count($order);$i++)
      	{
      		echo("<tr><td>".$order[$i]['name']."</td>");
      		echo("<td>".$order[$i]['price_tot']."€</td>");
      		echo("<td>".$order[$i]['quantity']."</td>");
      	}

      	?>
          </table>
      	<?php
      		echo "Prix HTC : ".$price_htc."€</br>";
      		echo "Prix TTC : ".$price_ttc."€</br>";

      		echo"<p>";
      		echo"Moyen de paiement: </br>";
      		echo"XXXXXXXXXXXX".$cart4."</br>";
      		echo$date_card."</br>";

      		echo"<p>";
      		echo"Adresse de livraison: </br>";
      		echo$_SESSION['adresse'];
      		echo"<p>";
      	?>

      	<form action="../Controller/c_order.php" method="GET">
      	<input type="hidden" name="step" value="4">
      	<button>Confirmer la commande</button>
      	</form>
      </div>
    </div>
  </body>
</html>
