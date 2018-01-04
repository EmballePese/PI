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
        <?php
        	$user = $donnees['Prenom'];
        	echo "<h3>Vous êtes connecté(e) sous $user</h3>";
        	echo("Vos informations personelles <br><br>");
        	echo("Nom : ".$donnees['Nom']."<br>");
        	echo("Prenom : ".$donnees['Prenom']."<br>");
        	echo("Adresse : ".$donnees['Adresse']."<br>");
        	echo("Code Postal : ".$donnees['CP']."<br>");
        	echo("Ville : ".$donnees['Ville']."<br>");
        	echo("Tel : ".$donnees['Tel']."<br>");
        	echo("Mail : ".$donnees['Mail']."<br>");
        ?>
        	 <form action="../Controller/c_deconnexion.php">
        		<input type="Submit" value="Deconnexion">
        	</form>
        	</br>
        	<h3>Modifier vos informations personelles :</h3>
        	<form action="../Controller/c_modification.php" method=GET>
            <table>
        	<tr><td>Adresse</td> <td>:</td> <td><input type="text" name="adress" <?php echo("value=\"".$donnees['Adresse']."\"");?>></td></tr>
        	<tr><td>Code Postal</td> <td>:</td> <td><input type="text" name="cp" <?php echo("value=\"".$donnees['CP']."\"");?>></td></tr>
        	<tr><td>Ville</td> <td>:</td> <td><input type="text" name="city" <?php echo("value=\"".$donnees['Ville']."\"");?>></td></tr>
            </table> <input type="Submit" value="Modifier">
        	</form>
          <?php echo $message; ?>
      </div>
    </div>
  </body>
</html>
