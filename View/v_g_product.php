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
        <h2>Voici les Articles en vente sur votre site :</h2></br>
        <table class="tab_center" cellpadding="5">
          <tr><th>Nom</th>
            <th>Quantité stock</th>
            <th>Compositions</th>
            <th>Date limite de consommation</th>
            <th>Marge</th>
            <th>Prix vente</th></tr>

            <?php
            for($i=0;$i<count($tab);$i++){
              echo"<tr><td>".$tab[$i]['Nom']."</td>";
              echo"<td>".$tab[$i]['Qte_stock']."</td>";
              echo"<td>".$tab[$i]['Composition']."</td>";
              echo"<td>".$tab[$i]['DLC']."</td>";
              echo"<td>".$tab[$i]['Marge']."</td>";
              $prix = $tab[$i]['Prix_achat']*$tab[$i]['Marge'];
              echo"<td>".$prix."€</td></tr>";
            }
            echo $message;
            ?>
          </table>
        </br>
        <form action="../Controller/c_modify_product.php">
          <button> Modifier vos produits </button>
        </form>
      </div>
    </div>
  </body>
</html>
