<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" rel="stylesheet" href="style.css"  /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Questions</title>
</head>

<body>
<?php
include("header.php");
include("connection.php");

?>
<form action="addpro_sub.php" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>
Enter Question:-</td><td><textarea cols="22" rows="5" name="question" placeholder="enter question" > </textarea></td></tr>
<tr>
<td>Option A:-</td><td><input type="text" name="optionA" placeholder=" Enter option A" /></td></tr>
<tr>
<td>Option B:-</td><td><input type="text" name="optionB" placeholder=" Enter option B" /></td></tr>
<tr>
<td>Option C:-</td><td><input type="text" name="optionC" placeholder=" Enter option C" /></td></tr>
<tr>
<td>Option D:-</td><td><input type="text" name="optionD" placeholder=" Enter option D" /></td></tr>
<tr>
<td>Right Answer:-</td><td><input type="text" name="Answer" placeholder=" Enter answer" /></td></tr>
<tr> <td>Category:-</td><td>
<?php
$sql ="select * from category ";
$rs=mysqli_query($conn,$sql);
?>
<select name="category"> 
<option > select category </option>
<?Php
while($res=mysqli_fetch_array($rs))
{
?>
<option value="<?php echo $res['catid']; ?>"><?php echo $res['catname']; ?></option>
<?php
}
?>
</select>
</td></tr>
</table>
<input type="submit" name="submit" value="ADD" />
</form>
<?php
include("footer.php");
?>
</body>
</html>