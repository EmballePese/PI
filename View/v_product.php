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
    <h2>Voici les categories disponibles :</h2></br>
	
	<form action="../Controller/c_categorie.php" method="GET">
	<input type="image" src="../Look/images/ratatouille.png" width="100" height="100"></br>
	<input type="hidden" value="Plat_Prepare" name="cat">
	Plat préparé</br>
	</form>
	
	<form action="../Controller/c_categorie.php" method="GET">
	<input type="image" src="../Look/images/Pomme.png" width="100" height="100"></br>
	<input type="hidden" value="Fruit_Legume"name="cat">
	Fruit/Legume</br>
	</form>
	
	<form action="../Controller/c_categorie.php" method="GET">
	<input type="image" src="../Look/images/jus de pomme.png"  width="100" height="100"></br>
	<input type="hidden" value="Boisson"name="cat">
	Boisson</br>
	</form>
		
	
	</form>
  </div>
</div>
</body>
</html>
