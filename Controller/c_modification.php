<?php
session_start();
include('../Controller/c_variable_inscription.php');
$email = $_SESSION['user'];
if(is_numeric($cp))
{
	include('../Model/m_modification.php');
	$message = "<h3>Modification réalisée avec succès</h3><br>";
}
else
{
	$message = "<h3>Le code postal doit être numérique !</h3><br>";
}
include('../Controller/c_account.php');
//header('Location: ../Controller/c_account.php');
?>
