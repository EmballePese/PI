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
        <h2>Historique commande :</h2></br>
        Commande(s) en cours :
      </br>
      <?php
      for($i=0;$i<count($order_processing);$i++){

        echo"Commande n°".$order_processing[$i]['id_cmd_vente'];
		$a = $order_processing[$i]['id_cmd_vente'];
		if($order_processing[$i]['Paye'] == 'non')
		{
        echo"<form action=\"c_order_modify.php\" method=\"POST\">
        <input type=\"hidden\" name=\"order\"value=\"$a\">
        <button>Modifier</button>
		</form>";
		}	
        echo"<form action=\"c_order_view.php\" method=\"POST\">
        <input type=\"hidden\" name=\"order\"value=\"$a\">
        <button>Voir</button>
        </form>";
      }
      echo $message_processing;
      ?>
    </br>
    Commande(s) passée(s) :

    <?php
    for($i=0;$i<count($order_pass);$i++){

      echo"Commande n°".$order_pass[$i];
      $a = $order_pass[$i];
      echo"<form action=\"c_order_view.php\" method=\"POST\">
      <input type=\"hidden\" name=\"order\"value=\"$a\">
      <button>Voir</button>
      </form>";
    }
    echo $message_pass;
    ?>
  </br>
  </div>
  </div>
  </body>
</html>
