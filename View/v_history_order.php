<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Articles</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Look/style2.css" />
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
    <h2>Historique Commande :</h2></br>
Commande en cours : 
</br>
<?php
echo"<form action=\c_order_display.php\"method=\"get\">";
for($i=0;$i<count($order_processing);$i++){
	
	echo"Commande".$order_processing[$i];
	echo"<input type=\"hidden\" name=\"order\"value=\"$i\">
		 <button>Modifier</button>
		 </br>
		</form>";
	
}
echo $message_processing;
?>
</br>
Commande passée :

<?php
echo $message_pass
?>
	</br>
  </div>
</div>
</body>
</html>
