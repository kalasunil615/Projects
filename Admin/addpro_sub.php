<?php
include("connection.php");

if(isset($_POST['submit']))
{
	$question=$_POST['question'];
	$optionA=$_POST['optionA'];
	$optionB=$_POST['optionB'];
	$optionC=$_POST['optionC'];
	$optionD=$_POST['optionD'];
	$answer=$_POST['Answer'];
	$catid=$_POST['category'];
	
	$sql="insert into Questions (question,optionA,optionB,optionC,optionD,answer,catid) value('$question' ,'$optionA' ,'$optionB', '$optionC','$optionD','$answer','$catid')";
	$rs=mysqli_query($conn, $sql);
	if($rs)
	{
		
		header("Location:home.php");
	}
	
	
}

?>