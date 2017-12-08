    <?php
    try
    {
    	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
    }
    catch (Exception $e)
    {
    	die('Erreur : '. $e->getMessage());
    }

    $recov = $bdd->query('SELECT * FROM User');
    $exist = false;

    while ($donnees = $recov->fetch()){
    		if($mail == $donnees['Mail']){
    			$exist = true;
    		}
    }

	if($exist == false){
	$mdp_clair = $mdp;
	$mdp = sha1($mdp);
    $bdd->exec("INSERT INTO User VALUES (0,2,'$name','$forename','$adress','$cp','$city','$tel','$mail','$mdp')");
	}

    $recov->closeCursor();
    ?>
