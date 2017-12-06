<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Flower Shop - About</title>
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
    <?php
    try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
    	die('Erreur : '. $e->getMessage());
    }

    $recov = $bdd->query('SELECT * FROM User');
    $exist = false;

    while ($donnees = $recov->fetch()){
    		if($mail == $donnees['Mail']){
    			$message = "User already taken";
    			$exist = true;
    		}
    }

    if($exist == false){
    $bdd->exec("INSERT INTO User VALUES (0,2,'$name','$forename','$adress','$cp','$city','$tel','$mail','$mdp')");

    $message = "Vous êtes inscrit sur notre magnifique site de vrac ! Votre mdp est : ".$mdp." Ne l'oubliez pas ! ;)

    <form action=\"../View/v_connexion.php\">
    <button>Retour à la page de connexion </button>";

    }

    echo$message;

    $recov->closeCursor();
    ?>

  </div>
  </div>
</div>
</body>
</html>
