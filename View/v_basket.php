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
          <li class="selected"><a href="../Index.php">A propos</a></li>
		  <li><a href="../View/v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <table class="tab_center">
	<h2> Mon Panier : </h2>
			<?php
		echo("<table class=\"tab_center\">
		<tr>
		<th>Nom</th>
		<th>Prix</th>
		<th>Quantité</th>
		</tr>
		");
	for($i=0;$i<count($order);$i++)
	{
		echo("<tr><td>".$order[$i]['name']."</td>");
		echo("<td>".$order[$i]['price_tot']."</td>");
		echo("<td>".$order[$i]['quantity']."</td>");
		echo("<td><form action=\"c_basket.php\" method=\"get\">
			<input type=\"hidden\" name=\"line\" value=\"$i\">
			<input type=\"submit\" name=\"op\" value=\"+\"></form></td>");
		echo("<td><form action=\"c_basket.php\" method=\"get\">
			<input type=\"hidden\" name=\"line\" value=\"$i\">
			<input type=\"submit\" name=\"op\" value=\"-\"></form></td></tr>");
	}
	echo $message;
			?>
    </table>
  </div>
</div>
</body>
</html>
