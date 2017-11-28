<!DOCTYPE html>
<html>

	<head>
		<title>Inscription</title>
	</head>
	<body>
	<?php
include('variable_inscription.php');
echo"<form action=\"./c_inscription.php\" method=\"GET\">
	Nom : <input type=\"text\" name=\"name\" value=\"$name\"><p>
	Prenom : <input type=\"text\" name=\"forename\" value=\"$forename\"><p>
	Adresse : <input type=\"text\" name=\"adress\" value=\"$adress\"><p>
	Code Postal : <input type=\"text\"name=\"cp\" value=\"$cp\"><p>
	Ville : <input type=\"text\" name=\"city\"value=\"$city\"><p>
	Mail: <input type=\"text\" name=\"mail\"value=\"$mail\"><p>
	Mot de passe : <input type=\"text\" name=\"mdp\"value=\"$mdp\"><p>
	Tel : <input type=\"text\" name=\"tel\"value=\"$tel\"><p>
	<p>
	<button>Inscription</button>
	</form>";
	
	?>
	</body>
</html>