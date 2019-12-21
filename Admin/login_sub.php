<?php
include("connection.php");


$unm=$_POST['uname'];
$pss=$_POST['pass'];

$sql="select * from reg where remail='$unm' and rpass='$pss'" ;
$rs=mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)==1)
{
header("location: home.php");	
}

?>