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
          <li><a href="../Controller/c_product.php">Articles</a></li>
          <li><a href="../Controller/c_basket.php">Mon panier</a></li>
          <li><a href="../Controller/c_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h3> 2ème étape : Paiement </h3></br>
      Veuillez entrer vos coordonnées bancaires ci-dessous :
      <p>
      <form action="c_order.php" method="get">
      Votre numéro de carte :
      <input type="text" name="cart1" maxlength="4" size="4"/>/
      <input type="text" name="cart2" maxlength="4" size="4"/>/
      <input type="text" name="cart3" maxlength="4" size="4"/>/
      <input type="text" name="cart4" maxlength="4" size="4"/>
      <p>
      Date d'expiration : <input type="month" name="date" size="10">
      <p>
      Cryptogramme : <input type="text" name="crypt" maxlength="3" size="3"/>
      <p>
      Nom du titulaire : <input type="text" name="name"/>
      <p>
      <input type="submit" name="check" value="Check">
      <input type="hidden" name="step" value="2">
    </form>
    <?php
    echo$message;
    ?>
        <table class="tab_center">
        </table>
      </div>
    </div>
  </body>
</html>
