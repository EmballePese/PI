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
          <li><a href="">Statut : à venir</a></li>
          <li><a href="../Index.php">Accueil</a></li>
          <li><a href="./v_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <table class="tab_center">
          <?php
        include('../Controller/c_variable_inscription.php');
        echo"<br> <br>Vous êtes inscrit sur notre magnifique site de vrac ! Votre mdp est : ".$mdp_clair.". Ne l'oubliez pas ! ;)
          <br><br>

          <form action=\"../View/v_connexion.php\">
          <button>Retour à la page de connexion </button>
          </form>";
          ?>
        </table>
      </div>
    </div>
  </body>
</html>
