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
          <li><a href="">Statut : à venir</a></li>
          <li><a href="../Index.php">Accueil</a></li>
          <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
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
