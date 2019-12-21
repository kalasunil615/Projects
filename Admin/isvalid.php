<?php 

session_start();
$ADName = $_SESSION['ADMIN'] ;
//echo $UName;exit;

if(!isset($ADName))
{
	
	header("Location:index.php");
	exit;
}
//require_once("include/database.php");
//include("adminsession.php");
//$obj= new database();
?>