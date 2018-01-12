<!DOCTYPE html>
<html>
  <head>
    <title>Emballé-pesé</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../Look/style_gerant.css" />
  </head>
  <body>
    <div id="main">
      <div id="header">
        <img id="logo" src="../Look/images/logo_accueil.png">
        <ul>
         <li><a href="../Index_gerant.php">Accueil</a></li>
         <li><a href="../Controller/c_g_product.php">Articles</a></li>
         <li><a href="../Controller/c_g_ban.php">Bannir</a></li>
      	 <li><a href="../Controller/c_g_articles.php">Acheter produit fermier</a></li>
      	 <li><a href="../Controller/c_g_label.php">Ajouter un label</a></li>
      	 <li><a href="../Controller/c_g_basket.php">Mon panier</a></li>
      	 <li><a href="../Controller/c_g_confirm_order.php">Commandes des clients</a></li>
         <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <table class="tab_center">
    	<h2> Mon Panier : </h2>
    			<?php
    		echo("<table class=\"tab_center\">
    		<tr>
    		<th>Nom</th>
    		<th>Prix</th>
    		<th>Quantité</th>
    		</tr>
    		");
    	for($i=0;$i<count($order);$i++)
    	{
    		echo("<tr><td>".$order[$i]['name']."</td>");
    		echo("<td>".$order[$i]['price_tot']."€</td>");
    		echo("<td>".$order[$i]['quantity']."</td>");
    		echo("<td><form action=\"c_g_basket.php\" method=\"get\">
    			<input type=\"hidden\" name=\"line\" value=\"$i\">
    			<input type=\"submit\" name=\"op\" value=\"+\"></form></td>");
    		echo("<td><form action=\"c_g_basket.php\" method=\"get\">
    			<input type=\"hidden\" name=\"line\" value=\"$i\">
    			<input type=\"submit\" name=\"op\" value=\"-\"></form></td></tr>");
    	}
    			?>
        </table>

    	<?php
    	echo $message;
    		echo"</br>";
    		echo "Prix HTC : ".$price_htc."€</br>";
    		echo "Prix TTC : ".$price_ttc."€</br>";
    		echo"<form action=\"c_g_order.php\" method=\"get\">
    		<input type=\"hidden\" name=\"step\" value=\"1\">
    		<button>Effectuer la commande</button>
    		</form>";


    	?>
      </div>
    </div>
  </body>
</html>
