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
        <h1> Ajoutez un nouveau label</h1>
        <table class="tab_center">

				<form action="../Controller/c_g_label.php" method="GET">
				Label: <input type="text" name="lab">
				<input type="hidden" name="check" value="Check">

				<button> Valider </button>
				</form>
				
		<h1> Ajoutez une nouvelle Categorie</h1>
        <table class="tab_center">

				<form action="../Controller/c_g_categorie.php" method="POST" enctype="multipart/form-data">
				Categorie: <input type="text" name="n_cat"></br>
				Image : <input type="file" name="image"></br>
				<input type="hidden" name="check" value="Check">
				</br>
				<button> Valider </button>
				</form>
				<p>
    			<?php
				if(empty($message)){
					$message="";
				}
    			echo $message;
				var_dump($cat,$image,$check);
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
