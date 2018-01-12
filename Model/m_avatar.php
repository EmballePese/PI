<?php

session_start();
$user = $_SESSION['user'];

if(isset($_POST['submit'])) {

	//Indique si le fichier a été téléchargé
	if(!is_uploaded_file($_FILES['image']['tmp_name']))
		echo 'Un problème est survenu durant l opération. Veuillez réessayer !';
	else {
		//liste des extensions possibles    
		$extensions = array('/png', '/gif', '/jpg', '/jpeg');

		//récupère la chaîne à partir du dernier / pour connaître l'extension
		$extension = strrchr($_FILES['image']['type'], '/');

		//vérifie si l'extension est dans notre tableau            
		if(!in_array($extension, $extensions))
			echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.';			
		else {         
			//on définit la taille maximale
			define('MAXSIZE', 300000);        
			if($_FILES['image']['size'] > MAXSIZE)
				echo 'Votre image est supérieure à la taille maximale de '.MAXSIZE.' octets';
			else {
				//enregistrement dans le dossier image
				$uploads_dir = '../Look/images';
				$tmp_name = $_FILES["image"]["tmp_name"];
				$name = $_FILES["image"]["name"];
				echo("name : ".$name);
				echo("user :".$user);
				move_uploaded_file($tmp_name, "$uploads_dir/$name");

				//connexion à la base de données
				try {
					$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
				} catch (Exception $e) {
					exit('Erreur : ' . $e->getMessage());																																																		}
				$req = $bdd->prepare("UPDATE User SET Avatar = :image WHERE Mail = '$user';");
				$req->execute(array(
					'image' => "$uploads_dir/$name"
				));

				echo 'L\'insertion s est bien déroulée !';
				include("../Controller/c_account.php");
			}
		}
	}
}

?>
