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
        <?php
          echo$message;
          echo"<form action=\"../Index.php\" method=\"get\">
             <button>Retour à l'acceuil</button>
             </form>";
        ?>
          </table>
      </div>
    </div>
  </body>
</html>
