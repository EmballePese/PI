<?php
session_start();
include('../Controller/c_variable_inscription.php');
$email = $_SESSION['user'];
include('../Model/m_modification.php');
header('Location: ../Controller/c_account.php');
?>
