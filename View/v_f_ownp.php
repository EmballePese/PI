<!DOCTYPE html>
<html>
  <head>
    <title>Emballé-pesé</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="../Look/style_fermier.css" />
  </head>
  <body>
    <div id="main">
      <div id="header">
        <img id="logo" src="../Look/images/logo_accueil.png">
        <ul>
          <li><a href="../Index_fermier.php">Accueil</a></li>
          <li><a href="../Controller/c_f_ownp.php">Vos Ventes</a></li>
          <li><a href="../Controller/c_f_article.php">Ajouter produit fermier</a></li>
          <li><a href="../Controller/c_f_account.php">Mon compte</a></li>
        </ul>
      </div>
      <div id="content">
        <h1> Vos ventes</h1>
        <table class="tab_center">
    			<?php
          echo $message;
          if(empty($tab)){
            echo "Vous n'avez pas de commande.";
          } else {
  					for($i=0;$i<count($tab);$i++){
						$name = $tab[$i]['Nom'];
						$name[0] = strtoupper($name[0]);
						$qte_initiales = $tab[$i]['Qte_article'];
						$qte_restantes = $tab[$i]['Qte_restantes'];
						$id_article = $tab[$i]['id_article'];
						echo "<table>";
						$date_cre = strftime('%d-%m-%Y',strtotime($tab[$i]['Date_crea']));
						$dlc = strftime('%d-%m-%Y',strtotime($tab[$i]['DLC']));

  						echo"<tr><td>Nom</td><td> : </td><td>".$name."</td></tr>";
  						echo"<tr><td>Composition</td><td> : </td><td>".$tab[$i]['Composition']."</td></tr>";
						echo"<tr><td>Date de création</td><td> : </td><td>".$date_cre."</td></tr>";
  						echo"<tr><td>Date limite de consommation</td><td> : </td><td>".$dlc."</td></tr>";
              echo"<tr><td>Prix d'achat</td><td> : </td><td>".$tab[$i]['Prix_achat']."€ par ".$tab[$i]['Unite']."</td></tr>";
  						echo"<tr><td>Label</td><td> : </td><td>".$tab[$i]['Label']."</tr>";
  						echo"<tr><td>Quantité initiale</td><td> : </td><td>".$tab[$i]['Qte_article']."</td></tr>";
  						echo"<tr><td>Quantité restante</td><td> : </td><td>".$tab[$i]['Qte_restantes']."</td><td>";
  						echo"<tr><td>Statut</td><td> : </td><td>".$tab[$i]['Statut']."</td></tr>";
						if($qte_initiales == $qte_restantes){
							echo"<form action = \"c_f_delete.php\" method=\"POST\">
							<input type=\"hidden\" name=\"qte_initiales\" value=\"$qte_initiales\">
							<input type=\"hidden\" name=\"qte_restantes\" value=\"$qte_restantes\">
							<input type=\"hidden\" name=\"id_article\" value=\"$id_article\">
						    <tr><td><button>Supprimer</button></td></tr>
							</form>";
							echo"<form action = \"c_f_modify.php\" method=\"POST\">
							<input type=\"hidden\" name=\"id_article\" value=\"$id_article\">
						    <tr><td><button>Modifier</button></td></tr>
							</form>";
						}
              echo "</table><br><br>";
  					}
				}
    			?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
