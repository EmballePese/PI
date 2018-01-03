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
         <li><a href="">Statut : Gérant</a></li>
     <li><a href="../Index_gerant.php">Accueil</a></li>
     <li><a href="../Controller/c_g_product.php">Articles</a></li>
     <li><a href="../Controller/c_g_ban.php">Bannir</a></li>
	 <li><a href="../Controller/c_g_articles.php">Acheter produit fermier</a></li>
	 <li><a href="../Controller/c_g_label.php">Ajouter un label</a></li>
	 <li><a href="../Controller/c_g_basket.php">Mon panier</a></li>
     <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h2>Voici les Articles proposer par les differents fermier:</h2></br>

        <?php
        	for($i=0;$i<count($tab);$i++){
        		echo"<form action=\"./c_g_articles.php\" method=\"GET\">";
        		echo"Nom :".$tab[$i]['Nom']."</br>";
        		echo"Composition:".$tab[$i]['Composition']."</br>";
        		echo"Date Limite de Consomation :".$tab[$i]['DLC']."</br>";
        		echo"Date de Création :".$tab[$i]['Date_crea']."</br>";
				echo"Label :".$tab[$i]['Label']."</br>";
				echo"Prix à l'unité:".$tab[$i]['Prix_achat']."€</br>";
				echo"Vendu par :".$tab[$i]['Fermier']."</br>";
				echo"Quantité souhaité : <input type=\"number\" name=\"quantity\" min=\"1\" value=\"1\">";
        		echo"<input type=\"hidden\" value=\"".$tab[$i]['Prix_achat']."\" name=\"Price\">";
        		echo"<input type=\"hidden\" value=\"true\" name=\"ajouter\">";
        		echo"<input type=\"hidden\" value=\"".$i."\" name=\"i\">";
        		echo"<button> Ajouter </button> </br>
        			 </form>
        			 </br>";
        	}
        	echo $message;
        	?>
        	</br>
      </div>
    </div>
  </body>
</html>
