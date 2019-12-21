<?php
include("connection.php");
if(isset($_REQUEST['id']))
{
$queid=$_GET['id'];
}

	$sql1="delete from questions where queid='$queid'";
	$rs1=mysqli_query($conn,$sql1);
	if($rs1)
	{
		header("location: viewquestion.php");
	}
	

?>