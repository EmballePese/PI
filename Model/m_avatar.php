<?php

session_start();
$user = $_SESSION['user'];

if(isset($_POST['submit'])) {

	//Indique si le fichier a été téléchargé
	if(!is_uploaded_file($_FILES['image']['tmp_name']))
		$message = 'Un problème est survenu durant l opération. Veuillez réessayer !<br>';
	else {
		//liste des extensions possibles
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');

		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');

		//vérifie si l'extension est dans notre tableau
		if(!in_array($extension, $extensions))
			$message = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.<br>';
		else {
			//on définit la taille maximale
			define('MAXSIZE', 256000000);
			if($_FILES['image']['size'] > MAXSIZE)
				$message = 'Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets<br>';
			else {
				//enregistrement dans le dossier image
				$uploads_dir = '../Look/images';
				$tmp_name = $_FILES["image"]["tmp_name"];
				$name = $_FILES["image"]["name"];
				//echo("name : ".$name);
				//echo("user :".$user);
				move_uploaded_file($tmp_name, "$uploads_dir/$name");

				//connexion à la base de données
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
				} catch (Exception $e) {
					exit('Erreur : ' . $e->POSTMessage());																																																		}
				$req = $bdd->prepare("UPDATE User SET Avatar = :image WHERE Mail = '$user';");
				$req->execute(array(
					'image' => "$uploads_dir/$name"
				));

				$message = 'L\'insertion s\'est bien déroulée !<br>';
			}
		}
	}
}

				include("../Controller/c_account.php");

?>
