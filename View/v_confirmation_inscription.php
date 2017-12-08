<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Emballe-pese</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Look/style.css" />
</head>
<body>
<div id="wrap">
  <div class="header">
    <div id="menu">
      <div class="logo">
        <ul>
        </ul>
      </div>
    </div>
  </div>
  <div class="center_content">
    <table class="tab_center">
			<?php
		include('../Controller/c_variable_inscription.php');
		echo"<br> <br>Vous êtes inscrit sur notre magnifique site de vrac ! Votre mdp est : ".$mdp_clair." Ne l'oubliez pas ! ;)
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
