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
        <h2>Voici les articles en vente sur votre site :</h2></br>
        <table class="tab_center" cellpadding="5">
          <tr><th>Nom</th>
            <th>Quantité stock</th>
            <th>Compositions</th>
            <th>Date limite de consommation</th>
            <th>Marge</th>
            <th>Prix vente</th></tr>

<?php
			$today = date("Y-m-d");
			for($i=0;$i<count($tab);$i++){
              echo"<tr><td>".$tab[$i]['Nom']."</td>";
              echo"<td>".$tab[$i]['Qte_stock']."</td>";
			  echo"<td>".$tab[$i]['Composition']."</td>";
			  if($today < $tab[$i]['DLC'])
			  {
				  echo"<td><b><font color=\"green\">".$tab[$i]['DLC']."</font></b></td>";
			  }
			  else
			  {
				  echo"<td><b><font color=\"red\">".$tab[$i]['DLC']."</font></b></td>";

			  }
              echo"<td>".$tab[$i]['Marge']."</td>";
              $prix = $tab[$i]['Prix_total'];
			  echo"<td>".$prix."€</td></tr>";
            }
            echo $message;
            ?>
		  </table>
        </br>
        <form action="../Controller/c_g_modify_product.php">
          <button> Modifier vos produits </button>
		</form>
	<br>
		<form action="../Controller/c_g_add_product.php">
          <button> Ajouter des produits </button>
        </form>
      </div>
    </div>
  </body>
</html>
