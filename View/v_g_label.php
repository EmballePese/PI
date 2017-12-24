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
          <li><a href="">Statut : Gérant</a></li>
     <li><a href="../Index_gerant.php">Accueil</a></li>
     <li><a href="../Controller/c_g_product.php">Articles</a></li>
     <li><a href="../Controller/c_g_ban.php">Bannir</a></li>
	 <li><a href="../Controller/c_g_articles.php">Acheter produit fermier</a></li>
	 <li><a href="../Controller/c_g_label.php">Ajouter un label</a></li>
	 <li><a href="../Controller/c_basket.php">Mon panier</a></li>
     <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h1> Rajoutez un nouveau label</h1>
        <table class="tab_center">
		
				<form action="../Controller/c_g_label.php" method="GET">
				Label: <input type="text" name="lab">
				<input type="hidden" name="check" value="Check">
				</br>
				<button> Valider </button>
				</form>
				<p>
    			<?php
				
    			echo $message;
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
