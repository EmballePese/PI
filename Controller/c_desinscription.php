<?php
session_start();
$mail = $_SESSION['user'];
$mdp = sha1($_POST['mdp']);
$droit = $_POST['droit'];
$exist = false;
include('../Model/m_desinscription.php');
if($exist == true){
  session_destroy();
  header('Location: ../View/v_desinscription.php');
} else{
  $message = "Mauvais mot de passe";
  session_write_close();
  if(empty($droit))
  {
	  include('../Controller/c_account.php');
  }
  else
  {
	  include('../Controller/c_f_account.php');
  }
}

?>
