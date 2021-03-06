<?php
session_write_close();
session_start();
$erreur = FALSE;
include('../Controller/c_variable_inscription.php');
$email = $_SESSION['user'];
$new_mail = $_POST['new_mail'];

if(!empty($cp) && ( !is_numeric($cp) || strlen($cp) !== 5))
{
	$erreur = TRUE;
	$message = "<h3>Le code postal doit être composé de 5 chiffres !</h3><br>";
}

if(!is_numeric($tel) || strlen($tel) !== 10)
{
	$erreur = TRUE;
	$message = "<h3>Le numéro de téléphone doit être composé de 10 chiffres !</h3>";
}

if(is_numeric($city))
{
	$erreur = TRUE;
	$message = "<h3>Le nom de la ville doit être composé de lettres !</h3>";
}
else if(filter_var($new_mail, FILTER_VALIDATE_EMAIL))
{
	include('../Model/m_exist_mail.php');
}
else
{
	$erreur = TRUE;
	$message = "<h3>Le mail n'est pas au bon format !</h3>";
}

if($erreur == FALSE)
{
	include('../Model/m_modification.php');
	$message = "<h3>Informations personnelles modifiées</h3><br>";
	session_destroy();
	session_start();
	$_SESSION['user'] = $new_mail;
}
session_write_close();
include('../Controller/c_g_account.php');
//header('Location: ../Controller/c_account.php');
?>
