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
					for($i=0;$i<count($tab);$i++){
						echo"Nom : ".$tab[$i]['Nom']."</br>";
						echo"Composition : ".$tab[$i]['Composition']."</br>";
						echo"Date de Limite de Consomation : ".$tab[$i]['DLC']."</br>";
						echo"Date de creation : ".$tab[$i]['Date_crea']."</br>";
						echo"Prix d'achat : ".$tab[$i]['Prix_achat']."€</br>";
						echo"Label : ".$tab[$i]['Label']."</br>";
						echo"<p>";
					}
    			?>
        </table>
      </div>
    </div>
  </body>
</html>
