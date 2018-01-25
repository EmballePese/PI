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
        <h1> Vos ventes</h1>
        <table class="tab_center">
    			<?php
				echo"<form action=\"c_f_modify.php\" method=\"POST\">";
				for($i=0;$i<count($tab);$i++){
						$qte = $tab[$i]['Qte_article'];
						$id_article = $tab[$i]['id_article'];
						$compo = $tab[$i]['Composition'];
						$pa = $tab[$i]['Prix_achat'];
						$name = $tab[$i]['Nom'];
						$unite =$tab[$i]['Unite'];
						$lab = $tab[$i]['Label'];
						$dc = $tab[$i]['Date_crea'];
						$dlc = $tab[$i]['DLC'];
		
  						echo"<tr><td>Nom</td><td> <td>:</td> <td><input type=\"text\" name=\"name\" value=\"$name\"></td></tr>";
  						echo"<tr><td>Composition</td><td> <td>:</td><td><input type=\"text\" name=\"compo\" value=\"$compo\">";
						echo"<tr><td>Date de création</td><td> <td>:</td> <td><input type=\"date\" name=\"dc\" value=\"$dc\">";
  						echo"<tr><td>Date limite de consommation</td><td> <td>:</td><td><input type=\"date\" name=\"DLC\" value=\"$dlc\">";
                        echo"<tr><td>Prix d'achat</td><td> <td>:</td> <td><input type=\"number\" size=\"3\" min=\"0.1\" step=\"0.01\" name=\"pa\"value=\"$pa\"</br> € par <select name=\"unite\"><option value=\"kilogramme\">kilogramme</option><option value=\"litre\">litre</option><option value=\"piece\">pièce</option></select><p>";
  						echo"<tr><td>Label</td><td> <td>:</td> <td><select name=\"lab\">";

					for($z=0;$z<count($tab_l);$z++){
						$name_l = $tab_l[$z]['Label'];
						$id = $tab_l[$z]['id_label'];
						if($lab == $name_l){
						echo"<option value=\"$id\"selected>$name_l</option>";
						}else{
						echo"<option value=\"$id\">$name_l</option>";
						}
					}
						echo"</select>";
				
  						echo"<tr><td>Quantité</td><td> <td>:</td> <td><input type=\"number\" min=\"1\" name=\"qte\" value=\"$qte\"";
						echo"<tr><td colspan=2></td><td style=\"text-align:center;\"><button>Modifier</button></td></tr>";
						echo"<input type=\"hidden\" name=\"check\"value=\"check\">
							 <input type=\"hidden\" name=\"id_article\"value=\"$id_article\">";
				}
				echo"</form>";
				echo$message;
				var_dump(empty($_POST['name']),$_POST,$compo,$name);
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
