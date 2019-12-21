<?php

include("connection.php");

$username=$_POST['username'];
$pwd=$_POST['password'];

$sql="select * from userdata where Email_Id='$username' and Password='$pwd'" ;
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)==1)
{
$row=mysqli_fetch_assoc($rs);
session_start();
$_SESSION['id'] = $row['userid'];
$_SESSION['USER']=$row['Email_Id'];
$_SESSION['msg']="Welcome ";

	echo $_SESSION['USER'];
header("location: home.php");	
}
else
{
	$_SESSION['msg']="User Name and Password Not Valid";
header("location: index.php");
 


}


?>