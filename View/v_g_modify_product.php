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
        <li><a href="../View/v_g_gerer.php">Gerer son site</a></li>
        <li><a href="../Controller/c_g_basket.php">Mon panier</a></li>
        <li><a href="../Controller/c_g_confirm_order.php">Commandes des clients</a></li>
        <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
      </ul>
    </div>
    <div id="content">
      <h2>Voici les articles en vente sur votre site :</h2></br>
      <table class="tab_center">
        <tr><th>Nom</th>
          <th>Quantité stock</th>
          <th>Compositions</th>
          <th>Date limite de consommation</th>
          <th>Marge</th>
          <th>Prix achat</th>
          <th>Catégorie</th></tr>

          <?php
          for($i=0;$i<count($tab);$i++){
            echo"<form action=\"../Model/m_g_modify_product.php\"method=\"POST\">";
			$cat_p = $tab[$i]['Type'];
			$date_fr = strftime('%d-%m-%Y',strtotime($tab[$i]['DLC']));
            echo"<tr><td><input type=\"text\" size=\"20\" name=\"Nom\" value=\"".$tab[$i]['Nom']."\"></td>";
            echo"<td>".$tab[$i]['Qte_stock']." ".$tab[$i]['Unite']."</td>";
            echo"<td>".$tab[$i]['Composition']."</td>";
            echo"<td>".$date_fr."</td>";
            echo"<td><input type=\"number\" style=\"width: 3em;\" min=\"0.01\" step=\"0.01\" name=\"Marge\" value=\"".$tab[$i]['Marge']."\"></td>";
            echo"<td>".$tab[$i]['Prix_achat']." €</td>";
            echo"<td><select name=\"cat\">";
            for($z=0;$z<count($tab_c);$z++){
              $c_name = $tab_c[$z]['Type'];
              $id_c = $tab_c[$z]['id_type'];
              if($cat_p == $tab_c[$z]['Type']){
                echo"<option value=\"$id_c\"selected>$c_name</option>";
              }else{
                echo"<option value=\"$id_c\">$c_name</option>";
              }
            }
            echo"</select>";

            echo"<input type=\"hidden\" name=\"id\" value=\"".$tab[$i]['id_produit']."\">";
            echo"<td><button>Modifier</button></td>";
            echo"</form>";
            echo"<form action=\"../Model/m_g_delete_product.php\" method=\"POST\">";
            echo"<input type=\"hidden\" name=\"id\" value=\"".$tab[$i]['id_produit']."\">";
            echo"<td><button>Supprimer</button></td></form>";

          }
          echo $message;
          ?>
        </table>
      </br>
      <form action="../Controller/c_g_product.php">
        <button>Retour</button>
      </form>
    </div>
  </div>
</body>
</html>
