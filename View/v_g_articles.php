<!DOCTYPE html>
<html>
  <head>
	<title>Emballé-pesé</title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="../Look/style_gerant.css" />
  </head>
  <body>
	<div id="main">
	  <div id="header">
		<img id="logo" src="../Look/images/logo_accueil.png">
		<ul>
		 <li><a href="../Index_gerant.php">Accueil</a></li>
		 <li><a href="../Controller/c_g_product.php">Articles</a></li>
		 <li><a href="../Controller/c_g_ban.php">Bannir</a></li>
		 <li><a href="../Controller/c_g_articles.php">Acheter produit fermier</a></li>
		   <li><a href="../View/v_g_gerer.php">Gerer son site</a></li>
		 <li><a href="../Controller/c_g_basket.php">Mon panier</a></li>
		 <li><a href="../Controller/c_g_confirm_order.php">Commandes des clients</a></li>
		 <li><a href="../Controller/c_g_account.php">Mon compte</a></li>
		</ul>
	  </div>
	  <div id="content">
		<h2>Voici les articles proposés par les différents fermiers:</h2></br>
		Trier par: <form action="c_g_articles.php" method="POST">
<?php 
$tab_t = array();
$tab_t[0]['Nom'] = "Prix décroissant"; 
$tab_t[1]['Nom'] = "Prix croissant"; 
$tab_t[2]['Nom'] = "Par nom A->Z"; 
$tab_t[3]['Nom'] = "Par nom Z->A"; 
$tab_t[0]['id'] = "prix_c"; 
$tab_t[1]['id'] = "prix_d"; 
$tab_t[2]['id'] = "name_c"; 
$tab_t[3]['id'] = "name_d"; 
echo" <select name=\"trier\">";
for($i=0; $i<count($tab_t); $i++)
{
	$id = $tab_t[$i]['id'];
	$nom = $tab_t[$i]['Nom'];

	if($trier == $id)
	{
		echo"<option value=".$id." selected>".$nom."</option>";
		$_SESSION['tri'] = $id;
	}
	else
	{	
		echo"<option value=".$id.">".$nom."</option>";
	}

}
echo"</select> <br>";
?>
<?php
echo"Rechercher produit : <input type=\"text\" value=\"".$search."\" name=\"search\"></br>";
echo"Rechercher fermier (Adresse e-mail) : <input type=\"text\" value=\"".$search_f."\" name=\"search_f\"></br>";
?>
			<button> Trier et rechercher</button></br><p>
			</form>
<?php
if(isset($_SESSION['tri']))
{
	$trier = $_SESSION['tri'];
}
echo $message;
for($i=0;$i<count($tab);$i++){
	$id_article = $tab[$i]['id_article'];
	$name = $tab[$i]['Nom'];
	$name[0] = strtoupper($name[0]);
	$unite = $tab[$i]['Unite'];
	echo "<table>";
	echo"<form action=\"./c_g_articles.php\" method=\"POST\">";
	echo"<tr><td>Nom</td><td> : </td><td>".$name."</td></tr>";
	echo"<tr><td>Composition</td><td> : </td><td>".$tab[$i]['Composition']."</td></tr>";
	echo"<tr><td>Date Limite de consommation</td><td> : </td><td>".$tab[$i]['DLC']."</td></tr>";
	echo"<tr><td>Date de création</td><td> : </td><td>".$tab[$i]['Date_crea']."</td></tr>";
	echo"<tr><td>Label</td><td> : </td><td>".$tab[$i]['Label']."</td></tr>";
	echo"<tr><td>Prix à l'unité</td><td> : </td><td>".$tab[$i]['Prix_achat']."€ par ".$tab[$i]['Unite']."</td></tr>";
	echo"<tr><td>Vendu par</td><td> : </td><td>".$tab[$i]['Fermier']."</td></tr>";
	echo"<tr><td>Quantité proposée</td><td> : </td><td>".$tab[$i]['Qte_restantes']."</td></tr>";
	if($unite == "piece"){
		$min =1;
		$step= 1;
	}else{
		$min = 0.1;
		$step= 0.1;
	}
	echo"<tr><td>Quantité souhaitée</td><td> : </td><td><input type=\"number\" name=\"quantity\" min=\"$min\" step=\"$step\" max=\"".$tab[$i]['Qte_restantes']."\" value=\"1\"></td></tr>";
	echo"<input type=\"hidden\" value=\"".$tab[$i]['Prix_achat']."\" name=\"Price\">";
	echo"<input type=\"hidden\" value=\"$unite\" name=\"Unite\">";
	echo"<input type=\"hidden\" value=\"true\" name=\"ajouter\">";
	echo"<input type=\"hidden\" value=\"".$i."\" name=\"i\">";
	echo"<input type=\"hidden\" value=\"".$id_article."\" name=\"id_article\">";
	echo"<input type=\"hidden\" value=\"".$tab[$i]['Qte_restantes']."\" name=\"qte\">";
	echo"<input type=\"hidden\" value=\"".$trier."\" name=\"trier\">";
	echo"<tr><td colspan=\"4\"><button> Ajouter </button></td></tr></br>
		</form>
		</table>
		</br>";
}
?>
		  </br>
		</div>
	</div>
  </body>
</html>
