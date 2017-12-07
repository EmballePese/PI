<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
$user = $_SESSION['user'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Emballé-pesé</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="Look/style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div id="menu">
      <div class="logo">
        <ul>
          <li><a href="">Statut : à venir</a></li>
          <li class="selected"><a href="Index.html">Accueil</a></li>
          <li><a href="View/v_product.php">Articles</a></li>
          <li><a href="View/v_basket.php">Mon panier</a></li>
          <li><a href="View/v_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <div class="left_content">
      <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" /></span>A propos</div>
      <div class="feat_prod_box_details">
	  <p class="details"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. <br />
		  <br />
	<?php
		echo("Bonjour $user");
		
    ?>
      </div>
</div>
</body>
</html>
