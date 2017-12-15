<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Gerant : Produit</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Look/style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div id="menu">
      <div class="logo">
        <ul>
		  <li><a href="">Statut : à venir</a></li>
          <li class="selected"><a href="../Index.php">A propos</a></li>
		  <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../View/v_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
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
