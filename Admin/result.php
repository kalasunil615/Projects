<?php
include("connection.php")
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css"  />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Untitled Document</title>
<style>
.div.search
{
  padding:20px;
  margin-top:px;
  font-size:15px;
  border:dotted;
}

.search-container button {
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
 .search-container {
    float: none;
  }
input[type=text],.search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
.input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>

<body bgcolor="#0099FF">

<h1 align="center"> Result</h1>
 <div align="center" class="search-container">
    <form action="#" method="post">

 <input type="text" placeholder="Enter Input For Search" name="search" style="padding:5px; margin-top:10px; font-size:15px; border:dotted;">

	 <ul class="nav">
<li>select-by
      <ul>
        <li><input type="submit" name="username" value="User Name" /></li>
        <li><input type="submit" name="date" value="Date" /></li>
        <li><input type="submit" name="showall" value="Show-all" /></li>
        <li><input type="submit" name="category" value="Category" /></li>
        
      </ul>
    </li>
    </ul>    
 </form>
    
  </div>
<br />
<?php
if(isset($_POST['showall']))
{
	echo "this is show all";

	?>
	<table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px">Result_id</th><th width="180px">User_Name</th><th width="180px">category</th><th width="180px">Total Question</th><th width="180px">Que attempt</th><th width="180px">Que Right</th><th width="180px">Que Wrong</th><th width="80px">Score</th> </tr>
<?php
$sql="select * from result";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['Result_id']; ?> </td>
<td> <?php echo $res['User_Name']; ?> </td>
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
</table>
<?php
}

if(isset($_POST['username']))
{
 $name=$_POST['search'];
 

	?>
	<table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px">Result_id</th><th width="180px">User_Name</th><th width="180px">category</th><th width="180px">Total Question</th><th width="180px">Que attempt</th><th width="180px">Que Right</th><th width="180px">Que Wrong</th><th width="80px">Score</th> </tr>
<?php
$sql="select * from result where User_Name='$name'";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['Result_id']; ?> </td>
<td> <?php echo $res['User_Name']; ?> </td>
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
</table>
<?php
}

if(isset($_POST['category']))
{
 $cat=$_POST['search'];
 echo "This Result For".$cat; 

	?>
	<table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px">Result_id</th><th width="180px">User_Name</th><th width="180px">category</th><th width="180px">Total Question</th><th width="180px">Que attempt</th><th width="180px">Que Right</th><th width="180px">Que Wrong</th><th width="80px">Score</th> </tr>
<?php
$sql="select * from result where Category='$cat'";
$rs=mysqli_query($conn,$sql);
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<tr>
<td> <?php echo $i; ?></td><td> <?php echo $res['Result_id']; ?> </td>
<td> <?php echo $res['User_Name']; ?> </td>
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
</table>
<?php
}

if(isset($_POST['date']))
{
 $date=$_POST['search'];
 echo "This Result For".$date;
 

	?>
	<table border="1" >
<tr>
<th width="80px"> Sr. No. </th><th width="180px">Result_id</th><th width="180px">User_Name</th><th width="180px">Date</th><th width="180px">category</th><th width="180px">Total Question</th><th width="180px">Que attempt</th><th width="180px">Que Right</th><th width="180px">Que Wrong</th><th width="80px">Score</th> </tr>
<?php
$sql="select * from result where Examdate='$date'";
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
</table>
<?php
}


?>
</body>
</html>