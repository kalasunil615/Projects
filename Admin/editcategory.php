<?php
include("connection.php");
if(isset($_REQUEST['id']))
{
$catid=$_GET['id'];
}
$sql="select * from category where catid='$catid'";

$rs=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($rs);
?>
<form action="#" method="post" enctype="multipart/form-data">
<input type="text" value="<?php echo $res['catname'];  ?>" name="cname" >
<input type="submit" value="Update" name="update">
</form>

<?php

if(isset($_POST['update']))
{
	$cn=$_POST['cname'];
	$sql1="update category set catname='$cn' where catid='$catid'";
	$rs1=mysqli_query($conn,$sql1);
	if($rs1)
	{
		header("location: viewcategory.php");
	}
	
}
?>