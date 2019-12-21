<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User_Registration</title>
</head>

<body bgcolor="#FF6600" >
<div class="container">
<div class="row">
<div class="col-sm-12">
<h3 style="color:#333" align="center">STUDENT REGISTRATION FORM</h3>
<form action="Userreg_sub.php" method="post" enctype="multipart/form-data">
<table align="center" cellpadding = "10" border="0">
 

<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="dob"  />
</td>
</tr>
 

<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 

<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 

<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
Other <input type="radio" name="Gender" value="Other" />
</td>
</tr>
 

<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 

<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>PIN CODE</td>
<td><input type="text" name="Pin_Code" maxlength="6" />
(6 digit number)
</td>
</tr>
 

<tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 

<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
 
 
<tr>
<td>QUALIFICATION</td>
<td>
<select name="Highest_Qualification" id="year">
<option value="-1">Select Highest Qualification:</option>
<option value="1">Post_Graduation</option>
<option value="2">Graduation</option>
<option value="3">XII</option>
<option value="4">X</option>

</select>
 

<select name="Stream" id="Stream">
<option value="-1">Select Stream:</option>
<option value="1">BCA</option>
<option value="2">B_TECH</option>
<option value="3">MCA</option>
 
<option value="4">M_TECH</option>
<option value="5">BBA</option>
<option value="6">MBA</option>
<option value="7">B.COM</option>
<option value="8">M.COM</option>
<option value="9">BSC(CS)</option>
<option value="10">BSC(Agri)</option>
<option value="11">XII Science</option>
<option value="11">XII Others</option>
<option value="12">X</option>
</select>
 

<select name="Year" id="year">
<option value="-1">Select Year:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">XII Mathematics</option>
<option value="6">XII Biology</option>
<option value="6">X Standard</option>

</select>
 
</td>

</tr>
<tr><td>PASSWORD</td><td><input type="password" name="Password" maxlength="16"  /></td></tr>
<tr><td>CONFIRM_PASSWORD</td><td><input type="password" name="Con_Password" maxlength="16"  /></td></tr>
<tr><td>UPLOAD PHOTO</td><td><input type="file" name="Img_File" />(max size less then 2mb)</td></tr>
<tr><td>UPLOAD SIGNATURE</td><td><input type="file" name="Sign_File" />(max size less then 2mb)</td></tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit"value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
</div></div></div>

</body>
</html>