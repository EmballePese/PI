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
        <h1>Ajoutez les produits de vos stocks </h1>
        <table class="tab_center">
          <?php
        include('../Controller/c_variable_inscription.php');
        echo"<form action=\"../Controller/c_g_add_product.php\" method=\"GET\">
          <tr><td>Nom</td> <td>:</td> <td><input type=\"text\" name=\"name\" value=\"$name\"></td></tr><p>
          <tr><td>Quantité stock</td> <td>:</td> <td><input type=\"text\" name=\"qte\"value=\"$qte\"></td></tr><p>
          <tr><td>Marge</td> <td>:</td> <td><input type=\"text\" name=\"marge\"value=\"$marge\"></td></tr><p>
          <tr><td>Stock mini</td> <td>:</td> <td><input type=\"text\" name=\"sm\"value=\"$sm\"></td></tr><p>
          <tr><td>Fermier</td> <td>:</td> <td><input type=\"text\" name=\"farm\"value=\"$farm\"></td></tr><p>
          <tr><td>Type de produit</td> <td>:</td> <td><select name=\"type\">";

          for($i=0;$i<count($tab_t);$i++){
            $namet = $tab_t[$i]['name'];
            $id = $tab_t[$i]['id'];
            echo"<option value=\"$id\">$namet</option>";
          }

          echo"</select>
          <input type=\"hidden\" name=\"check\"value=\"check\">
          <p>
          <tr><td colspan=2></td><td style=\"text-align:center;\"><button>Ajouter au site</button></td></tr>
          </form>";
          echo $message;
          var_dump($farm,$name);
          ?>
        </table>
      </div>
    </div>
  </body>
</html>
