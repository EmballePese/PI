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
		
          <?php echo $message; ?>

		<?php
			$user = $donnees['Prenom'];
			echo "<h3>Vous êtes connecté(e) sous $user.</h3>";
			if(!empty($donnees['Avatar']))
			{
				echo"<img src=".$donnees['Avatar']." class=\"avatar\" alt=\"Avatar\" />";
			}

		?>


			<form method="post" action="../Model/m_avatar.php" enctype="multipart/form-data">

			     <label for="icone">Avatar du profil (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
					  <input type="file" name="image" id="image" /><br />
					  <input type="submit" name="submit" value="Envoyer" />
			</form>
<?php
        	echo("<br><br>Vos informations personelles :<br><br>");
        	echo("Nom : ".$donnees['Nom']."<br>");
        	echo("Prénom : ".$donnees['Prenom']."<br>");
        	echo("Adresse : ".$donnees['Adresse']."<br>");
        	echo("Code postal : ".$donnees['CP']."<br>");
        	echo("Ville : ".$donnees['Ville']."<br>");
        	echo("Téléphone : ".$donnees['Tel']."<br>");
        	echo("Adresse e-mail : ".$donnees['Mail']."<br>");
        ?>
        	 <form action="../Controller/c_deconnexion.php">
        		<input type="Submit" value="Déconnexion">
        	</form>
        	</br>
        	<h3>Voir vos commandes :</h3>
        	<form action="../Controller/c_history_order.php">
        		<input type="Submit" value="Mes commandes">
        	</form>
        	</br>
        	<h3>Modifier vos informations personelles :</h3>
        	<form action="../Controller/c_modification.php" method=GET>
            <table>
        	<tr><td>Adresse</td> <td>:</td> <td><input type="text" name="adress" <?php echo("value=\"".$donnees['Adresse']."\"");?>></td></tr>
        	<tr><td>Code Postal</td> <td>:</td> <td><input type="text" name="cp" size="5" <?php echo("value=\"".$donnees['CP']."\"");?>></td></tr>
        	<tr><td>Ville</td> <td>:</td> <td><input type="text" name="city" <?php echo("value=\"".$donnees['Ville']."\"");?>></td></tr>
        	<tr><td>Tel</td> <td>:</td> <td><input type="text" name="tel" size="10" <?php echo("value=\"".$donnees['Tel']."\"");?>></td></tr>
        	<tr><td>Adresse Mail</td> <td>:</td> <td><input type="text" name="new_mail" <?php echo("value=\"".$donnees['Mail']."\"");?>></td></tr>
            </table> <input type="Submit" value="Modifier">
        	</form>
					
            <h3>Supprimer votre compte</h3>
        	 <form action="../Controller/c_desinscription.php">
             <table>
                <tr><td>Mot de passe</td> <td>:</td> <td><input type="password" name="mdp"></td></tr>
        		 </table> <input type="Submit" value="Se désinscrire">
        	</form>
					
      </div>
    </div>
  </body>
</html>
