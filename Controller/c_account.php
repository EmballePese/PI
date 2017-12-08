<?php
session_start();

if(empty($_SESSION['user']))
{
	include('../View/v_connexion.php');
}
else
{
	$user = $_SESSION['user'];
	include('../Model/m_account.php');
	include('../View/v_account.php');
}



?>