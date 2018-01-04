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
        <h2>Donnez votre sentences :</h2></br>

		<form action="../Controller/c_g_ban.php" method="GET">
		Mail du client : <input type="text" name="mail">
		<input type="submit" name="action" value="ban">
		<input type="submit" name="action" value="suspendre">
		<input type="submit" name="action" value="Lever la suspension/bannissement">
		<input type="hidden" name="check" value="check">
		</form>
			<?php
        	echo $message;
        	?>
      </div>
    </div>
  </body>
</html>
