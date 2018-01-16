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
        <h2> Veuillez vous connecter </h2>
        <table class="tab_center">
          <form action="../Controller/c_connexion.php" method="GET">
            <tr><td>Adresse e-mail</td> <td>:</td> <td><input type="text" name="mail"></td></tr>
            <tr><td>Mot de passe</td> <td>:</td> <td><input type="password" name="mdp"></td></tr>
            <tr><td colspan=2></td><td style="text-align:center;"><button>Connexion</button></td></tr>
          </form>
        </table>
        <p> Pas encore de compte ? Vous pouvez vous inscrire en cliquant <a href="../View/v_inscription.php"> ici</a>.</p>
      <?php
      include('../Controller/c_variable_inscription.php');
      echo$message;
      ?>
      </div>
    </div>
  </body>
</html>
