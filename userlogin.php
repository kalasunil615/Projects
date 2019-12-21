<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>userlogin</title>
<style>

.userlogin{
	margin-left:1100px;
	    margin-top:-321px;
	background-color:transparent;
    color:#000;
    width: 200px;
    height:320px;
}
.h2{
	color:#000;
	}


</style>
</head>
<body>
<form class="userlogin" action="ulogin_sub.php" method="post" enctype="multipart/form-data">
<fieldset style="float:none; width:0px; height:291px;">
<center>
<legend > Login</legend>
<label>Username/Email</label>
<input type="text" name="username" placeholder="Enter Username/Email" /><br /><br />
<label> Password </label>
<input type="password" name="password" placeholder="Enter Password"/><br /><br />
<input type="submit" name="submit"value="Login">
<h4>Forgot Password</h4>
<h2><a href="Userreg.php"> Register Now!</a></h2>
</center>
</fieldset>
</form>
</center>
</body>
</html>

