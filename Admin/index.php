
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Log In</title>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
</head>

<body background="image/bg2.jpg">
<div align="center" style="margin-top:10%;">

<h1  align="center" style="color: #00F;">Welcome to Admin Panel </h1>
<h2 align="center" style="color:#00F;">Log In To Start Session</h2>
<form action="login_sub.php" method="post" enctype="multipart/form-data">
<table border="0" bordercolor="#00FF00">
<tr>
<td><label style="color: #FFF;">Username</label></td>
<td><input type="text" name="uname" placeholder="enter username" /></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td><label style="color: #FFF;"> Password </label></td>
<td><input type="password" name="pass" placeholder="enter password"/></td>
</tr>
<tr></tr><tr></tr><tr></tr>
</table>
<center>
<input style="margin-left:5%;" type="submit" name="submit" value="Login"> <a href="reg.php" style="color:#F00;" style="text-decoration: none;"><h2> Register Now!</h2></a>
</center>

</form>
</div>
</body>
</html>