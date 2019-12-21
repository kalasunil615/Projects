<?php
$conn= mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "mydatabase") or die(mysql_error());

$nm=$_POST['name'];
$email=$_POST['email'];
$mb=$_POST['mobile'];
$dob=$_POST['dob'];
$unm=$_POST['uname'];
$ps=$_POST['pass'];

$sql=sprintf("insert into reg (rname, remail,rmobile, rdob, ruser,rpass) values ('$nm', '$email', '$mb', '$dob', '$unm', '$ps')");
$rs=mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)==1)
{
	echo "Data inserted";
}

?>