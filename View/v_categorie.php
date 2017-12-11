<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles</title>
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
          <li class="selected"><a href="../Index.php">Accueil</a></li>
		  <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <h2>Voici les Articles disponibles :</h2></br>
<?php
	for($i=0;$i<count($tab);$i++){
		echo"<form action=\"./c_categorie.php\" method=\"GET\">";
		echo"Nom :".$tab[$i]['Nom']."</br>";
		echo"En stock :".$tab[$i]['Qte_stock']."</br>";
		echo"Composition :".$tab[$i]['Composition']."</br>";
		echo"Date Limite de Consomation :".$tab[$i]['DLC']."</br>";
		echo"Prix :".$tab[$i]['Prix_total']."</br>";
		echo"<input type=\"number\" name=\"quantity\" min=\"1\" max=\"20\">";
		echo"<input type=\"hidden\" value=\"".$tab[$i]['Prix_total']."\" name=\"Price".$tab[$i]['Nom']."\">";
		echo"<input type=\"hidden\" value=\"".$cat."\" name=\"cat\">";
		echo"<input type=\"hidden\" value=\"true\" name=\"ajouter\">";
		echo"<input type=\"hidden\" value=\"".$i."\" name=\"i\">";
		echo"<button> Ajouter </button> </br>
			 </form>
			 </br>";
	}
	echo $message;
	?>
	</br>
	<form action="../View/v_product.php">
	<button> Retour aux rubriques </button>
	</form>
  </div>
</div>
</body>
</html>
