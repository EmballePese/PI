<?php
session_start();
include('../Controller/c_variable_inscription.php');
$farm = $_SESSION['user'];
$tab = array();
include('../Model/m_f_ownp.php');
include('../View/v_f_ownp.php');
?>