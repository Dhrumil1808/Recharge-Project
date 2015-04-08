<?php
include("dbrecharge.php");
if(isset($_POST['submit']))
{
	$uname=$_POST['operator'];
	$type=$_POST['type'];
	$tmp_name=$_FILES['picture']['tmp_name'];
	$name=$_FILES['picture']['name'];
	$f=strrchr($name,".");
		switch($f)
		{
			case '.jpg':
			case '.png':
			case '.gif':
			case '.jpeg':
			
			{
				move_uploaded_file($tmp_name,"upload/$name");
				$path="upload/$name";
				
				$z="INSERT INTO `operator_details`(TYPE,Image, Name) VALUES ('$type','$path','$uname')";
					mysql_query($z);
				break;
				
			}
			
			default:
			{
				
				break;
			}
			
			
			}
			
			header("location:recharge.php");
		
			
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form name="operator" enctype="multipart/form-data" method="post">
<input type="file" name="picture" /><br />

<input type="text" name="operator" placeholder="operator" /> <br/>
<input type="text" name="type" placeholder="type" /><br />
<input type="submit" value="submit" name="submit" /> 

</form>
</body>
</html>