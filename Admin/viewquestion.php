<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>
 
<body style="overflow: visible;">
 <div class="container">
  <?php
  include("header.php");
  include("connection.php");
  ?>
  </div>
  <form action="#" method="post" enctype="multipart/form-data">
<table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px"> Question</th><th width="180px">Option A</th><th width="180px">Option B</th><th width="180px">Option C</th><th width="180px">Option D</th><th width="180px">Right Answer</th><th width="180px">Category</th><th width="80px"> Edit</th> <th width="80px"> Delete </th></tr>
<?php
$sql="select * from questions";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['question']; ?> </td>
<td> <?php echo $res['optionA']; ?> </td>
<td> <?php echo $res['optionB']; ?> </td>
<td> <?php echo $res['optionC']; ?> </td>
<td> <?php echo $res['optionD']; ?> </td>
<td> <?php echo $res['answer']; ?> </td>
<td><?php 
$sql1 ="(select * from category where catid= $res[catid])";
$rs1=mysqli_query($conn,$sql1);
?>

<?Php
while($res1=mysqli_fetch_array($rs1))
{
 echo $res1['catname']; 
}
?>
 </td>
<td><a href="editquestion.php?id=<?php echo $res['queid'];  ?>"> Edit </a></td>  
<td><a href="deletequestion.php?id=<?php echo $res['queid'];  ?>"> Delete </td>
</tr>
<?php
$i++;
}
?>
</table>
</form>
<div>

<?php
include("footer.php");
?>

</div> 
</body>
</html>