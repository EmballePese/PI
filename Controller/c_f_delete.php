<?php
session_start();
include('../Controller/c_variable_inscription.php');
$message="<h3 align='center'>Article supprimé !</h3>";
$id_article = $_POST['id_article'];
include('../Model/m_f_delete.php');
session_write_close();
include('../Controller/c_f_ownp.php');
?>
