<?php
include("connection.php");
include("adminsession.php");



$dateFormat = "d F Y -- g:i a";

$targetDate = time() + (5*60);//Change the 25 to however many minutes you want to countdown

$actualDate = time();

$secondsDiff = $targetDate - $actualDate;

$remainingDay    = floor($secondsDiff/60/60/24);

$remainingHour  = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);

$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);

$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));

$actualDateDisplay = date($dateFormat,$actualDate);

$targetDateDisplay = date($dateFormat,$targetDate);





$catn="";
$c_id=$_GET['cid'];
echo "Welcome".$UName;"</br>";
$sql1="SELECT * from category WHERE catid='$c_id'";
$rs1=mysqli_query($conn,$sql1);
while($catname=mysqli_fetch_assoc($rs1))
{
//echo " You are Given Exam in ". $catname['catname'];
$catn=$catname['catname'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examnow</title>
<!--<link type="text/css" rel="stylesheet" href="style.css"  /> 
--><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

  var days = <?php echo $remainingDay; ?> 

  var hours = <?php echo $remainingHour; ?> 
  var minutes = <?php echo $remainingMinutes; ?> 

  var seconds = <?php echo $remainingSeconds; ?>

function setCountDown ()

{

  seconds--;

  if (seconds < 0){

      minutes--;

      seconds = 59

  }

  if (minutes < 0){

      hours--;

      minutes = 59

  }

  if (hours < 0){

      days--;

      hours = 23

  }

  document.getElementById("remain").innerHTML = days+" days, "+hours+" hours, "+minutes+" minutes, "+seconds+" seconds";

  SD=window.setTimeout( "setCountDown()", 1000 );

  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);

       //window.alert("Time is up. Press submit to continue."); // change timeout message as required          
		document.quiz.submit();
    }

 

}
document.onkeydown = function() {    
    switch (event.keyCode) { 
        case 116 : //F5 button
            event.returnValue = false;
            event.keyCode = 0;
            return false; 
        case 82 : //R button
            if (event.ctrlKey) { 
                event.returnValue = false; 
                event.keyCode = 0;  
                return false; 
            } 
    }
}
 

</script>

</head>
<body class="body" onload="setCountDown();"  onkeydown="function()" style="background-color:#000;">  
<div class="container" style="background-color:#F90;">
<div class="row">
<div class="col-sm-12">
<div style="background-color:#000; color:#FFF;"><b>Rules for Quiz</b>
<ul type="circle">
<li>There are total 10 Questions in Quiz </li>
<li>Every Correct Answer You will get 4 marks</li>
<li>Every in-correct Answer You will get -1 marks</li>
<li>You must be Answer All the question</li>
<li>After Taking the Test you will see your Result Including the Correct Answer</li>
</ul>
</div></div></div>
<hr />
<div class="row">
<div class="col-sm-12">
<h1 align="center" style="background-color:#000; color:#FFF;">Let's Start Quiz</h1></div></div>
<div class="row">
<div class="col-sm-12">
<div align="right" style="background-color:#000; color:#FFF;" id="remain"> <?php 

echo "$remainingDay days, $remainingHour hours, $remainingMinutes minutes, $remainingSeconds seconds";
?>
</div></div></div>
<?php
$sql="SELECT * FROM `questions` WHERE `catid`='$c_id' ORDER BY rand() LIMIT 10";

$rs=mysqli_query($conn,$sql);
?>
<div class="row">
<div class="col-sm-12">
<form action="test_sub.php" name="quiz" method="post" enctype="multipart/form-data">
<table border="0">
<?php
$i=1;
while($res=mysqli_fetch_assoc($rs))
{
	
?>
<input type="hidden" name=<?php echo "wanswer".$i; ?> value="<?php echo $res['answer']; ?>" />
<input type="hidden" name="catname" value="<?php echo $catn; ?>" />

<tr>
<td><?php echo $i; ?></td><td> <?php echo $res['question']; ?> </td></tr>
<tr><td></td><td><input type="radio" name=<?php echo "canswer".$i; ?> value="<?php echo $res['optionA']; ?>" /><?php echo $res['optionA']; ?></td></tr>
<tr><td></td><td><input type="radio" name=<?php echo "canswer".$i; ?> value="<?php echo $res['optionB']; ?>" /><?php echo $res['optionB']; ?></td></tr>
<tr><td></td><td><input type="radio" name=<?php echo "canswer".$i; ?> value="<?php echo $res['optionC']; ?>" /><?php echo $res['optionC']; ?></td></tr>
<tr><td></td><td><input type="radio" name=<?php echo "canswer".$i; ?> value="<?php echo $res['optionD']; ?>" /><?php echo $res['optionD']; ?></td></tr>
<?php



?>
</tr>
<?php
$i++;
}
?>
  <tr><td align="center"><input type="submit" name="submit" value="Submit" style="background-color:#000; color:white;" /></td></tr>
</table>
</form>
</div></div>
</div>
<!--<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>-->
</body>
</html>