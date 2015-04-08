<?php
ob_start();
include("dbrecharge.php");
if(isset($_COOKIE['email']))
{
$value=$_COOKIE['email'];
//echo $value;
$select="SELECT * FROM `user_details` WHERE Email='$value'";
//echo $select;
$query=mysql_query($select);
$q=mysql_fetch_object($query);
$f=$q->Password;

if(isset($_POST['submit']))
{
	$g=$_POST['pass3'];
	echo $g;
	$u="UPDATE user_details SET Password='$g' WHERE Email='$value'";
	//echo $u;
	mysql_query($u);
	header("location:index_transparent.php?msg=Password has been changed successfully");
}	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<title>Untitled Document</title>
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">
function pass(opass)
{
	//alert("what abt u");
	var upass=changes.pass1;
	//alert (upass.value);
	//alert(opass);
	if(upass.value == opass)
	{
		document.getElementById('d').innerHTML='&nbsp;';
		return true;
	}
	else
	{
		document.getElementById('d').innerHTML='Password not matching with existing one';
		upass.value='';
		//upass.focus();
		return false;
	}
}
function passw()
{
	
	var newpass=changes.pass2;
		//alert(newpass.value);

if(newpass.value.length<4)
{
	document.getElementById('e').innerHTML='Password should be of min. 4 characters';
	newpass.value='';
	//newpass.focus();
	return false;
	
	
}

else
{
	document.getElementById('e').innerHTML='&nbsp;';
	return true;
}

}
function passwo()
{
	var newpass=changes.pass2;
	//alert(newpass.value);
	var newpass1=changes.pass3;
	//alert(newpass1.value);
	if(newpass1.value==newpass.value)
	{
		document.getElementById('g').innerHTML='&nbsp;';
		return true;	
	}
	else
	{
		document.getElementById('g').innerHTML='Password not matching with the above';
		newpass1.value='';
		//newpass1.focus();
		return false;
	}
	

	
}

function validate()
{
	/*alert(pass('<?php //echo $f; ?>'));
	alert(passw());
	//alert(passw());
	alert(passwo());*/
	
	return  pass('<?php echo $f;?>') && passw() && passwo()  ;
	
}


</script>
</head>

<body>

<div class="grid1_of_3 left1">
<div class="btn_style bg6">
 				<h4>Change Password</h4>
			</div>
<div class="password_form">
<form method="post" name="changes" onsubmit="return validate()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<span class="top"> Old Password </span>
    <input type="password" id="d1" name="pass1" onblur="pass('<?php echo $f;?>')" />
    <div id="d"> Enter existing password </div>
 <span class="top"> New Password </span>
   <input type="password" id="d2" name="pass2" onblur="passw()" />
   <div id="e"> password should be of minimum 4 characters </div>
   <span class="top"> Confirm Password </span>
   <input type="password" id="d3" name="pass3" onblur="passwo()" />
   <div id="g"> Enter the same password as typed above. </div>
   <br/>
   
   <input type="submit" name="submit" value="Change Password" />
</form>
</div>
</div>
</body>
</html>
<?php
}
else
{
	header("location:index.php?msg=Your session has expired. Please Re-Login");
	
}
ob_flush();
?>