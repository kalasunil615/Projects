<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$nc=$_POST['ncat'];
	$sql="insert into category (catname) value('$nc')";
	$rs=mysqli_query($conn, $sql);
	if($rs)
	{
		header("Location:home.php");
	}
	
	
}

?>