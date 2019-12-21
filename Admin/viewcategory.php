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
<th width="80px"> Sr. No. </th><th width="180px"> Category Name</th><th>Image</th><th width="80px"> Edit</th> <th width="80px"> Delete </th></tr>
<?php
$sql="select * from category";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['catname']; ?> </td>
<td><img src="<?php echo "../".$res['catimg']; ?>" height="30px"  /></td>
<td><a href="editcategory.php?id=<?php echo $res['catid'];  ?>"> Edit </a></td>
<td><a href="deletecategory.php?id=<?php echo $res['catid'];  ?>"> Delete </td>
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