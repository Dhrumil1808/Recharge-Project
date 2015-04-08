<?php
include("dbrecharge.php");


	if(isset($_POST['submit']))
	{
	$n=$_POST['name'];
	$m=$_POST['mobile'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$a=$_POST['address'];
	$g=$_POST['gender'];
	$ag=$_POST['age'];
	$l=$_POST['location'];
	
	
	$i="INSERT INTO user_details(user_ID, Name, Mobile_No, Email, Password, Address, Gender, Age, Location) VALUES ('NULL','$n','$m','$e','$p','$a','$g','$ag','$l')";
	echo $i;
	mysql_query($i);
	header("location:Recharge3.php");
	
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="user" method="post" enctype="multipart/form-data" >
<table>
<tr>
<td>
<input type="text" name="name" placeholder="name" /> <br /> </td>
<td>
<input type="text" name="mobile" placeholder="mobile no" /> <br /> </td>
<td>
<input type="text" name="email" placeholder="email" /> <br /> </td>
<td>
<input type="password" name="password" placeholder="password" /> <br /> </td>
<td>
<input type="text" name="address" placeholder="address" /> <br />
</td>
<td>
<input type="radio" name="gender" value="Male"  /> Male
<input type="radio" name="gender" value="Female" ;?> Female <br />
</td>

<td>
<input type="text" name="age" placeholder="age" /> <br />
</td>
<td>
<input type="text" name="location" placeholder="location" /> <br />
</td>
<td>
<input type="submit" name="submit" value="submit" />
</td>
</table>
</form>
</body>
</html>