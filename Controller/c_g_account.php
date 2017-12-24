<?php
session_start();
include('c_variable_inscription.php');

if(empty($_SESSION['user']))
{
	include('../View/v_connexion.php');
}
else
{
	$user = $_SESSION['user'];
	include('../Model/m_g_account.php');
	include('../View/v_g_account.php');
}



?>
