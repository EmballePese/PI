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
        <h1>Ajoutez les produits de vos stocks </h1>
        <table class="tab_center">
          <?php
         include('../Controller/c_variable_inscription.php'); 
		  for($i=0;$i<count($tab_prod);$i++){
			  echo"<form action=\"../Controller/c_g_add_product.php\" method=\"POST\" enctype=\"multipart/form-data\">";
			  $name = $tab_prod[$i]['Nom'];
			  $qte = $tab_prod[$i]['Qte_acheter'];
			  $sm = 1;
			  $farm = $tab_prod[$i]['Fermier'];
			  $id_article = $tab_prod[$i]['id_article'];
		  if(!empty($tab_prod[$i]['Marge'])){
			$marge = $tab_prod[$i]['Marge'];
		  }
         echo"<tr><td>&nbsp;</td></tr><tr><td>Nom</td> <td>:</td><td>".$name."<input type=\"hidden\" name=\"name\" value=\"$name\"></td></tr>
           <tr><td>Quantité stock</td> <td>:</td> <td>".$qte."<input type=\"hidden\" name=\"qte\"value=\"$qte\"></td></tr>
		   <tr><td>Marge</td> <td>:</td> <td><input type=\"text\" size =\"5\" name=\"marge\"value=\"$marge\" placeholder=\"coefficient multiplicateur\"></td></tr>
           <tr><td>Stock mini</td> <td>:</td> <td>".$sm."<input type=\"hidden\" name=\"sm\"value=\"$sm\"></td></tr>
           <tr><td>Fermier</td> <td>:</td> <td>".$farm."<input type=\"hidden\" name=\"farm\"value=\"$farm\"></td></tr>
		   <input type=\"hidden\" name=\"id_article\"value=\"$id_article\"></td></tr>
		  <tr><td>Type de produit</td> <td>:</td> <td><select name=\"type\">";

          for($z=0;$z<count($tab_t);$z++){
            $namet = $tab_t[$z]['name'];
            $id = $tab_t[$z]['id'];
            echo"<option value=\"$id\">$namet</option>";
          }
          echo"</select>";
		  echo"
		  <br><tr><td>Photo</td> <td>:</td><td><input type=\"file\" name=\"image\" id=\"image\"/></td></tr><br>
          <input type=\"hidden\" name=\"check\"value=\"check\"></td>
          <tr><td colspan=2></td><td style=\"text-align:center;\"><button>Ajouter au site</button></td></tr>
		  </br>
          </form>
		  </br>";
          }
          echo $message;
          ?>
        </table>
      </div>
    </div>
  </body>
</html>
