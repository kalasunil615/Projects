<?php 

session_start();
$UName = $_SESSION['USER'] ;
//echo $UName;exit;

if(!isset($UName))
{
	
	header("Location:index.php");
	exit;
}
//require_once("include/database.php");
//include("adminsession.php");
//$obj= new database();
?>