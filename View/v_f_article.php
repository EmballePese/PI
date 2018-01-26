<!DOCTYPE html>
<html>
  <head>
    <title>Emballé-pesé</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../Look/style_fermier.css" />
  </head>
  <body>
    <div id="main">
      <div id="header">
        <img id="logo" src="../Look/images/logo_accueil.png">
        <ul>
          <li><a href="../Index_fermier.php">Accueil</a></li>
          <li><a href="../Controller/c_f_ownp.php">Vos Ventes</a></li>
          <li><a href="../Controller/c_f_article.php">Ajouter produit fermier</a></li>
          <li><a href="../Controller/c_f_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h1> Ajoutez vos proposition de vente</h1>
        <table class="tab_center">
    			<?php
    		include('../Controller/c_variable_inscription.php');
    		echo"<form action=\"../Controller/c_f_article.php\" method=\"POST\">
    			<tr><td>Nom</td> <td>:</td> <td><input type=\"text\" name=\"name\" placeholder=\"Nom de l'article\" value=\"$name\"></td></tr><p>
    			<tr><td>Composition</td> <td>:</td> <td><input type=\"text\" name=\"compo\" value=\"$compo\"></td></tr><p>
				<tr><td>Quantité</td><td>:</td> <td><input type=\"number\" min=\"1\" name=\"qte\" value=\"$qte\"> unité : <select name=\"unite\"><option value=\"gramme\">kilogramme</option><option value=\"litre\">litre</option><option value=\"piece\">pièce</option></select></td></tr><p>
				<tr><td>Date de création</td> <td>:</td> <td><input type=\"date\"name=\"dc\" value=\"$dc\"></td></tr><p>
    			<tr><td>Date limite de consommation </td> <td>:</td> <td><input type=\"date\" name=\"DLC\" value=\"$dlc\"></td></tr><p>
    			<tr><td>Prix achat (par unité)</td> <td>:</td> <td><input type=\"number\" size=\"3\"  placeholder=\"4.20\" min=\"0.1\" step=\"0.01\" name=\"pa\"value=\"$pa\"> €</td></tr><p>
    			";

    				echo"<tr><td>Label</td> <td>:</td></td><td><select name=\"lab\">";

    			for($i=0;$i<count($tab_l);$i++){
    				$name_l = $tab_l[$i]['name'];
    				$id = $tab_l[$i]['id'];
    				echo"<option value=\"$id\">$name_l</option>";
    			}
    			echo"</select>
    			<input type=\"hidden\" name=\"check\"value=\"check\">
    			<p>
    			<tr><td colspan=2></td><td style=\"text-align:center;\"><button>Soumettre le produit</button></td></tr>
    			</form>";
    			echo $message;
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
