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
          <li><a href="./v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
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
