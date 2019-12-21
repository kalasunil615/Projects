<?php

  include("connection.php");
  include("adminsession.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>

	
</style>
<title>Home</title>
</head>
 
<body class="body" style="overflow: visible; background-color: #000;">
<div class="container"">
  <div class="row">
  <div class="col-sm-12" >
   <?php
   include("header.php");
  ?>
   </div></div>
   <h2>My Result's</h2>
   <div class="row">
  <div class="col-sm-12" >
  <table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px">Result_id</th><th width="180px">User_Name</th><th width="180px">Date</th><th width="180px">category</th><th width="180px">Total Question</th><th width="180px">Que attempt</th><th width="180px">Que Right</th><th width="180px">Que Wrong</th><th width="80px">Score</th> </tr>
<?php
$sql="select * from result where User_Name='$UName'";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['Result_id']; ?> </td>
<td> <?php echo $res['User_Name']; ?> </td>
<td> <?php echo $res['Examdate']; ?> </td>
<td> <?php echo $res['Category']; ?> </td>
<td> <?php echo $res['Total_Que']; ?> </td>
<td> <?php echo $res['Que_Attempt']; ?> </td>
<td> <?php echo $res['Que_Right']; ?> </td>
<td> <?php echo $res['Que_Wrong']; ?> </td>
<td> <?php echo $res['Score']; ?> </td></tr>
<?php
$i++;
}
?>
</table></div></div>
&nbsp;
<div class="row">
  <div class="col-sm-12" >
   <?php
   include("footer.php");
  ?>
   </div></div>
</body>
</html>