<?php
include("connection.php");
if(isset($_REQUEST['id']))
{
$queid=$_GET['id'];
}
$sql="select * from questions where queid='$queid'";

$rs=mysqli_query($conn,$sql);
$res=mysqli_fetch_assoc($rs);
?>
<form action="#" method="post" enctype="multipart/form-data">
<input type="text" value="<?php echo $res['question'];  ?>" name="question" >
<input type="text" value="<?php echo $res['optionA'];  ?>" name="optionA" >
<input type="text" value="<?php echo $res['optionB'];  ?>" name="optionB" >
<input type="text" value="<?php echo $res['optionC'];  ?>" name="optionC" >
<input type="text" value="<?php echo $res['optionD'];  ?>" name="optionD" >
<input type="text" value="<?php echo $res['answer'];  ?>" name="answer" >
<?php
$sql1 ="select * from category  ";
$rs1=mysqli_query($conn,$sql1);
?>
<select name="category"> 
<option > select category </option>
<?Php
while($res1=mysqli_fetch_array($rs1))
{
?>
<option <?php if($res1['catid']==$res['catid']){ ?> selected <?php } ?> value="<?php echo $res1['catid']; ?>"><?php echo $res1['catname']; ?></option>
<?php
}
?>
</select>
<input type="submit" value="Update" name="update">
</form>

<?php

if(isset($_POST['update']))
{
	$qn=$_POST['question'];
	$oa=$_POST['optionA'];
	$ob=$_POST['optionB'];
	$oc=$_POST['optionC'];
	$od=$_POST['optionD'];
	$an=$_POST['answer'];
	$ct=$_POST['category'];
	$sql1="update questions set question='$qn',optionA='$oa' ,optionB='$ob',optionC='$oc',optionD='$od', answer='$an', catid='$ct' where queid='$queid'";
	$rs1=mysqli_query($conn,$sql1);
	if($rs1)
	{
		header("location: viewquestion.php");
	}
	
}
?>