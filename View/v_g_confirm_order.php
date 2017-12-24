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
          <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h1> Commandes des clients : </h1>
        <table class="tab_center">
		
			
    			<?php
				for($i=0;$i<count($tab);$i++){
					$id = $tab[$i]['id_cmd_vente'];
					echo"<form action=\"../Controller/c_g_confirm_order.php\" method=\"GET\">";
					echo"Commande n° ".$tab[$i]['id_cmd_vente']." du client ".$tab[$i]['Consommateur'];
					echo"<input type=\"hidden\" name=\"check\" value=\"check\">";
					echo"<input type=\"hidden\" name=\"idc\" value=\"$id\">
						<button>Valider la commande</button>
						</form>
						<p>";
				}
    			echo $message;
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
