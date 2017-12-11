<?php
session_start();
session_destroy();
$mail = $_GET['mail'];
$mdp = sha1($_GET['mdp']);
include('../Model/m_desinscription.php');
header('Location: ../View/v_desinscription.php');
?>
