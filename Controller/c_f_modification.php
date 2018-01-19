<?php
session_start();
$erreur = FALSE;
include('../Controller/c_variable_inscription.php');
$email = $_SESSION['user'];
$new_mail = $_POST['new_mail'];

if(!is_numeric($cp) || strlen($cp)!== 5)
{

	$erreur = TRUE;
	$message = "<h3>Le code postal doit être composé de 5 chiffres !</h3><br>";
}
else if(!is_numeric($tel) || strlen($tel)!== 10)
{
	$erreur = TRUE;
	$message = "<h3>Le telephone doit être composé de 10 chiffres !</h3>";
}
else if(filter_var($new_mail, FILTER_VALIDATE_EMAIL))
{
	include('../Model/m_exist_mail.php');
}
else
{
	$erreur = TRUE;
	$message = "<h3>Le mail n'est pas au bon format</h3>";
}

if($erreur == FALSE)
{
	include('../Model/m_modification.php');
	$message = "<h3>Modification réalisée avec succès</h3><br>";
	session_destroy();
	session_start();
	$_SESSION['user'] = $new_mail;
}
include('../Controller/c_f_account.php');
//header('Location: ../Controller/c_account.php');
?>
