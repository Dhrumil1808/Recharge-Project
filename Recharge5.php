<?php
	include("dbrecharge.php");
	$id=$_GET['upd'];
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
	$u="update user_details SET Name='$n',Mobile_No='$m',Email='$e',Password='$p',Address='$a',Gender='$g',Age='$ag',Location='$l' WHERE user_ID='$id'";
	
	
	mysql_query($u);
	
	header("location:Recharge3.php");
	}
	else
	{
	$query="Select * from user_details where user_ID='$id'";
		//echo $query;
		$result=mysql_query($query);
	
		$r=mysql_fetch_object($result);
	
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
<input type="text" name="name" placeholder="name" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Name; ?>" /> <br />
	</td>
    <td>
<input type="text" name="mobile" placeholder="mobile no" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Mobile_No;?>" /> <br /> </td>
	<td>
<input type="text" name="email" placeholder="email" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Email;?>" /> <br /> </td>
	<td>
<input type="password" name="password" placeholder="password" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Password;?>"/> <br /> </td>

	<td>
<input type="text" name="address" placeholder="address" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Address;?>"/> <br /> </td>
	<td>
<input type="radio" name="gender" value="Male"  /> Male
<input type="radio" name="gender" value="Female" ;?>  Female <br /> 
	</td>
    <td>
<input type="text" name="age" placeholder="age" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Age;?>" /> <br />
	</td>
    <td>
<input type="text" name="location" placeholder="location" value="<?php if(isset($_REQUEST['upd'])) echo $r-> Location;?>"/> <br /> </td>
	<td>
<input type="submit" name="submit" value="submit" />
	</td>
</table>
</form>
</body>
</html>