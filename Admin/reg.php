<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="overflow: visible;">
 <div class="container">
  <?php
  include("header.php");
  ?>

<form action="insert_reg.php" method="post" enctype="multipart/form-data">
<div class="container">
<fieldset style="margin-right:900px; margin-left:0px; background-color:lightgrey; padding-top:2px; align-content: center;">
 <legend style="color:blue; font-size:35px;align:justify;font-weight:bold;">Register YourSelf</legend><br><br>
<table style="margin-top: auto">
    <tr>
        <td>Name:</td><td> <input type="text" name="name" placeholder="enter name" maxlength="20" required="required"></td>
    </tr>
     <td>Email:-</td><td> <input type="email" name="email" placeholder="enter email" maxlength="20" required="required"></td>
    </tr>
    <tr><td></td></tr><tr><td></td></tr>
    <tr>
    <td>Mobile Number:</td><td><input type="text" name="mobile" maxlength="10" placeholder="enter mobile number" required="required"></td></tr>
    <tr><td></td></tr><tr><td></td></tr>
    <tr>
    <td>DOB:</td><td><input type="date" name="dob" min="1999-01-01" required="required"></td></tr>
    <tr><td></td></tr><tr><td></td></tr>
<tr>
    <td>Gender:</td><td><input type="radio" name="gender" value="male">Male</td><br></tr>
    <tr><td></td><td><input type="radio" name="gender" value="female">Female</td></tr>
   <tr><td></td> <td><input type="radio" name="gender" value="female">other</td></tr>
    <tr><td></td></tr><tr><td></td></tr>
<tr><td>UserName:</td><td> <input type="text" name="uname" placeholder="enter username" maxlength="20" required="required"></td>
    </tr>


    <tr>
    <td>Password:</td><td><input type="password" placeholder="enter password" name="pass" required="required"></td></tr>
    <tr><td></td></tr><tr><td></td></tr>
<tr>
    
    <td>confirm-Password:</td><td><input type="password" placeholder="enter password" name="pwd" required="required" /></td></tr>
    <tr><td></td></tr><tr><td></td></tr>
</table>

    <input type="submit" name="submit" value="submit" >
    <input type="reset" value="reset">
    </fieldset>
</form>

<?php
  include("footer.php");
  ?>
</div> 
</body>
</html>