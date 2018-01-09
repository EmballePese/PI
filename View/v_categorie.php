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
      		<li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h2>Voici les categories disponibles :</h2></br>
		Trier par:<form action="c_categorie.php" method="GET">
				   <select name="trier">
				   <option value="prix_d">Prix decroissant</option> 
				   <option value="prix_c">Prix croissant</option> 
				   <option value="name_c">Par nom A->Z</option>
				   <option value="name_d">Par nom Z->A</option>
				   </select>
				   <p>
				   <?php
				   echo"<input type=\"hidden\" value=\"".$cat."\" name=\"cat\">";
				   echo"Rechercher : <input type=\"text\" value=\"".$search."\" name=\"search\">";
				   ?>
				   <button> Trier et rechercher</button></br><p>
				   </form>

        <?php
        	for($i=0;$i<count($tab);$i++){
				$id_produit = $tab[$i]['id_produit'];
        		echo"<form action=\"./c_categorie.php\" method=\"GET\">";
        		echo"Nom :".$tab[$i]['Nom']."</br>";
        		echo"En stock :".$tab[$i]['Qte_stock']."</br>";
        		echo"Composition :".$tab[$i]['Composition']."</br>";
        		echo"Date Limite de Consomation :".$tab[$i]['DLC']."</br>";
        		echo"Prix :".$tab[$i]['Prix_total']."</br>";
				echo"Vendu par le fermier :".$tab[$i]['Fermier']."</br>";
        		echo"<input type=\"number\" name=\"quantity\" min=\"1\" max=\"20\" value=\"1\">";
        		echo"<input type=\"hidden\" value=\"".$tab[$i]['Prix_total']."\" name=\"Price\">";
        		echo"<input type=\"hidden\" value=\"".$cat."\" name=\"cat\">";
        		echo"<input type=\"hidden\" value=\"true\" name=\"ajouter\">";
				echo"<input type=\"hidden\" value=\"".$id_produit."\" name=\"id_produit\">";
        		echo"<input type=\"hidden\" value=\"".$i."\" name=\"i\">";
        		echo"<button> Ajouter </button> </br>
        			 </form>
        			 </br>";
        	}
        	echo $message;
			var_dump($tab);
        	?>
        	</br>
        	<form action="../View/v_product.php">
        	<button> Retour aux rubriques </button>
        	</form>
      </div>
    </div>
  </body>
</html>
