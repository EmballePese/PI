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
      <?php
      if(empty($message)){
        $message="";
      }
      echo $message;
      ?>
      <h3> Ajouter un nouveau label</h3>
      <table class="tab_center">

        <form action="../Controller/c_g_label.php" method="POST">
          Label: <input type="text" name="lab">
          <input type="hidden" name="check" value="Check">
          <br><br>
          <button> Valider </button>
        </form>

        <h3> Ajouter une nouvelle catégorie</h3>
        <table class="tab_center">

          <form action="../Controller/c_g_categorie.php" method="POST" enctype="multipart/form-data">
            Catégorie: <input type="text" name="n_cat"></br><br>
            Image : <input type="file" name="image"></br>
            <input type="hidden" name="check" value="Check">
          </br>
          <button> Valider </button>
        </form>
        <p>
        </table>
      </div>
    </div>
  </body>
  </html>
