<?php 
session_start();
session_unset($_SESSION['USER']);
header('Location: index.php');
exit;
?>