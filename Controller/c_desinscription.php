<?php
session_start();
$mail = $_GET['mail'];
$mdp = sha1($_GET['mdp']);
$exist = false;
include('../Model/m_desinscription.php');
if($exist == true){
  session_destroy();
  header('Location: ../View/v_desinscription.php');
} else{
  $message = "Mauvais identifiant.";
  session_write_close();
  include('../Controller/c_account.php');
}

?>
