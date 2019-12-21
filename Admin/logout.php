<?php 
session_start();
session_unset($_SESSION['ADMIN']);
header('Location: index.php');
exit;
?>