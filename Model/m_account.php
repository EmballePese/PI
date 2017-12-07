<?php
session_start();
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}

$recov = $bdd->query("SELECT * FROM User WHERE Mail = '$user'");

$donnees = $recov->fetch();

echo("Vos informations personelles <br><br>");
echo("Nom : ".$donnees['Nom']."<br>");
echo("Prenom : ".$donnees['Prenom']."<br>");
echo("Adresse : ".$donnees['Adresse']."<br>");
echo("Code Postal : ".$donnees['CP']."<br>");
echo("Ville : ".$donnees['Ville']."<br>");
echo("Tel : ".$donnees['Tel']."<br>");
echo("Mail : ".$donnees['Mail']."<br>");

$recov->closeCursor();


?>
