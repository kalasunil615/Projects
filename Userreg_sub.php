<?php
include("connection.php");
if(isset($_POST['submit']))
{
$fnm=$_POST['First_Name'];
$lnm=$_POST['Last_Name'];
$dob=$_POST['dob'];
$eml=$_POST['Email_Id'];
$mb=$_POST['Mobile_Number'];
$gen=$_POST['Gender'];
$add=$_POST['Address'];
$ct=$_POST['City'];
$pin=$_POST['Pin_Code'];
$state=$_POST['State'];
$con=$_POST['Country'];
$hq=$_POST['Highest_Qualification'];
$strm=$_POST['Stream'];
$yr=$_POST['Year'];
$pwd=$_POST['Password'];

$filename=$_FILES['Img_File']['name'];
$ftmp=$_FILES['Img_File']['tmp_name'];
$path="imagefile/".$filename ;


$sql="insert into userdata(First_Name,Last_Name,dob,Email_Id,Mobile_Number,Gender,Address,City,Pin_Code,State,Country,Highest_Qualification,Stream,Year,Password,File_Name,File_Path) values ('$fnm', '$lnm','$dob','$eml','$mb', '$gen', '$add', '$ct', '$pin', '$state', '$con', '$hq','$strm' ,'$yr','$pwd','$filename','$path')";
echo "Plese insert all the data to process further";
if(move_uploaded_file($ftmp,$path))
{
 $rs=mysqli_query($conn,$sql);
  if($rs)
  { 
     header("location:index.php");		
  }

 }
}
?>