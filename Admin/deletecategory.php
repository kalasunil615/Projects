<?php
include("connection.php");
if(isset($_REQUEST['id']))
{
$catid=$_GET['id'];
}

	$sql1="delete from category where catid='$catid'";
	$rs1=mysqli_query($conn,$sql1);
	if($rs1)
	{
		header("location: viewcategory.php");
	}
	

?>