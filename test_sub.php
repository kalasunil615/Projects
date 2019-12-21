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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>
</head>

<body class="body">
<div class="container">
  <div class="row">
  <div class="col-sm-12" >
  <div align="right" style="background-color:#000; color:#FFF"> 
   <h2 align="center">Quiz World</h2>
    <h1 align="center">Result</h1>
    <a href="home.php" style="text-decoration:none;"><img src="image/Back-to-Home.png" alt="Back" /></a>
  </div></div></div>

<center>
  <div class="row">
  <div class="col-sm-12" >
<?php

$un=$UName;
echo $un;
$w=0;
$r=0;
$n=0;
$s=0;
$q=10;
$a=0;

 if(isset($_POST['submit']))
 {?>
    <table border="1">
<tr>
<th colspan="4">Answer</th>
</tr>
<tr>
<th>sr. no.</th>
<th>correct answer</th>
<th>Your answer</th>
<th>write or wrong</th>
</tr>
	<?php $cq=$_POST['catname'];
	 //echo "Cat Id Received". $catname;

	 ?><tr><?php for($j=1; $j<=$q; $j++){
		if(isset($_POST["canswer".$j]))
		{
		 ?>
         <td><?php echo $j."&nbsp;&nbsp;";?></td>
		 <td><?php echo $_POST["canswer".$j]."&nbsp;&nbsp;&nbsp;";?></td>
	     <td><?php echo $_POST["wanswer".$j]."&nbsp;&nbsp;&nbsp;";?></td>
         <td><?php if($_POST["canswer".$j] == $_POST["wanswer".$j])
		{
			$r=$r+1;
			echo '<img src="image/right-answer.png">';
		}
		else
		{
		$w=$w+1;
		 echo '<img src="image/wrong.jpg">';
		}
		}
		else
		{	
		?></td></tr><tr><td><?php echo $j; ?><td></td><td></td><td><?php
		echo "not attempt";
				$n=$n+1;
		}
		echo "<br>";?></td></tr><?php
	 }
}
 
$s=$r*4-$w*1;

if($r>=8)
{
	echo "Congratultions";
	}
else{
	echo "Oops Better Luck Next Time<br>";
	}?><div><h1><?php
echo "Your Score Is $s<br>";?></h1></div><?php
echo "Total Right Answer is $r <br>";
echo "Total Wrong Answer is $w <br>";
echo "Total Question not attemped is $n <br>";
$a=$r+$w;

?></td></tr></table>
<?php
$date= date("Y-m-d");

$sql="insert into Result(User_Name,Examdate,Category,Total_Que,Que_Attempt,Que_Right,Que_Wrong,Score) values('$un','$date','$cq','$q','$a','$r','$w','$s')";
$rs=mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)==1)
{

}
?>
</center>
</div></div></div>
</body>
</html>