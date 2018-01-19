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

            <?php echo $message; ?>

        <?php
        	$user = $donnees['Prenom'];
        	echo "<h3>Vous êtes connecté(e) sous $user</h3>";
        	echo("Vos informations personelles :<br><br>");
        	echo("Nom : ".$donnees['Nom']."<br>");
        	echo("Prénom : ".$donnees['Prenom']."<br>");
        	echo("Adresse : ".$donnees['Adresse']."<br>");
        	echo("Code postal : ".$donnees['CP']."<br>");
        	echo("Ville : ".$donnees['Ville']."<br>");
        	echo("Téléphone : ".$donnees['Tel']."<br>");
        	echo("Adresse e-mail : ".$donnees['Mail']."<br>");
        ?>
        	 <form action="../Controller/c_deconnexion.php">
        		<input type="Submit" value="Deconnexion">
        	</form>
        	</br>
        	<h3>Modifier vos informations personelles :</h3>
        	<form action="../Controller/c_f_modification.php" method=POST>
            <table>
        	<tr><td>Adresse</td> <td>:</td> <td><input type="text" name="adress" <?php echo("value=\"".$donnees['Adresse']."\"");?>></td></tr>
        	<tr><td>Code Postal</td> <td>:</td> <td><input type="text" name="cp" size="5" <?php echo("value=\"".$donnees['CP']."\"");?>></td></tr>
        	<tr><td>Ville</td> <td>:</td> <td><input type="text" name="city" <?php echo("value=\"".$donnees['Ville']."\"");?>></td></tr>
        	<tr><td>Tel</td> <td>:</td> <td><input type="text" name="tel" size="10" <?php echo("value=\"".$donnees['Tel']."\"");?>></td></tr>
        	<tr><td>Adresse Mail</td> <td>:</td> <td><input type="text" name="new_mail" <?php echo("value=\"".$donnees['Mail']."\"");?>></td></tr>
            </table> <input type="Submit" value="Modifier">
        	</form>
        	</br>
            <h3>Supprimer votre compte</h3>
        	 <form action="../Controller/c_desinscription.php">
        		<tr><td>Adresse mail</td> <td>:</td> <td><input type="text" name="mail"></td></tr></br>
                <tr><td>Mot de passe</td> <td>:</td> <td><input type="text" name="mdp"></td></tr></br>
        		<input type="Submit" value="Se desinscrire">
        	</form>
          
      </div>
    </div>
  </body>
</html>
