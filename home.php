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
   <h1 align="center" class="h1"> Welcome <?php echo $UName; ?> </h1>
   <h1 style="color: #000; background: #FFF;"> <center> Choose Category For Examination </center> </h1>
<div class="row">
  <div class="col-sm-4 col-md-8 col-lg-12 " >
    <ul class="ul">
   <?php
    $sql="select * from category";
    $rs=mysqli_query($conn,$sql);
    $i=1;
  while($res=mysqli_fetch_assoc($rs))
  {
  ?>
  
  <li class="li"><a class="ax"  href="test.php?cid=<?php echo $res['catid']; ?>"> <img class="category_img" src="<?php echo $res['catimg']; ?>"/> <center>
  <?php echo $res['catname']; ?></center></a></li>

<?php
$i++;
}
?>
</ul>
</div></div>

<div class="row">
  <div class="col-sm-12" >
<?php
include("footer.php");
?>
</div></div>>
</div>
</body>
</html>