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
        <h2>Historique Commande :</h2></br>
    Recapitulatif de la commande <?php echo$order ?> :
    </br>
    <?php
    echo("<table class=\"tab_center\">
    		<tr>
    		<th>Nom</th>
    		<th>Prix</th>
    		<th>Quantité</th>
    		</tr>
    		");
    for($i=0;$i<count($tab);$i++)
    {
    		echo("<tr><td>".$tab[$i]['name']."</td>");
    		echo("<td>".$tab[$i]['price_tot']."€</td>");
    		echo("<td>".$tab[$i]['quantity']."</td>");

    }
    ?>
    </br>
    </table>
    <p>
    Moyen de Livraison :</br>
    <?php
    echo$message;
    ?>
    <p>
    </br>
    Moyen de paiement:</br>
    Carte Bancaire
    </br>
    <p>
    <form action="c_history_order.php" method="get">
    <button> Retour à mes commandes</button>
    </form>
      </div>
    </div>
  </body>
</html>
