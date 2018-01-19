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
        <h2> Que voulez-vous changer ? :</h2></br>

    	<form action="../Controller/c_order_modify.php" method="get">
    	<input type="hidden" name="change" value="adress">
    	<button>Modifier méthode de livraison</button>
    	</form>
    	<form action="../Controller/c_order_modify.php" method="get">
    	<input type="hidden" name="change" value="cb">
    	<button>Modifier vos coordonnées bancaires</button>
    	</form>
    	</br>
    	</br>
    <?php

    echo$message;
    echo$message_e;
    ?>

    	</br>
      </div>
    </div>
  </body>
</html>
