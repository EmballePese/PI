<?php
session_start();
session_destroy();
header('Location: ../View/v_connexion.php');
?>
