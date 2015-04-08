<?php
include("dbrecharge.php");
if(isset($_POST['submit']))
{
	$t=$_POST['box'];
	$i="INSERT INTO `recharge type`(`Type_ID`, `TYPE`) VALUES ('NULL','$t')";
	mysql_query($i);
	header("location:Recharge1.php");
}

if(isset($_POST['accept']))
{
	$s=$_POST['state'];
	$i="INSERT INTO `circle`(`Circle_ID`, `Circle_Name`) VALUES ('NULL','$s')";
	mysql_query($i);
	header("location:Recharge1.php");
}

if(isset($_POST['add']))
{
	$p=$_POST['plans'];
	$i="INSERT INTO `schemes`(`Scheme_TYPE_ID`, `Scheme_Name`) VALUES('NULL','$p')";
	mysql_query($i);
	header("location:Recharge1.php");
}

if(isset($_POST['go']))
{
	$a=$_POST['Amount'];
	$t=$_POST['talktime'];
	$v=$_POST['Validity'];
	$d=$_POST['description'];
	$st=$_POST['SchemeType'];
	$o=$_POST['Operator'];
	
	$i="INSERT INTO `plan_details`(`Scheme_ID`, `Amount`, `Talktime`, `Validity`, `Description`, `Scheme_Type_ID`, `Operator_ID`) VALUES ('NULL','$a','$t','$v','$d','$st','$o')";
	mysql_query($i);
	header("location:Recharge1.php");
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="rtype" method="post" enctype="multipart/form-data">
<input type="text" name="box" placeholder="type of recharge" /><br />
<input type="submit" name="submit" value="submit" />
</form>

<form name="circle" method="post" enctype="multipart/form-data">
<input type="text" name="state" placeholder="state" />  <br />
<input type="submit" name="accept" value="submit" />

</form>

<form name="schemes" method="post" enctype="multipart/form-data">
<input type="text" name="plans" placeholder="plan" /><br />
<input type="submit" name="add" value="submit" /><br />
</form>

<form name="plan" method="post" enctype="multipart/form-data">
<input type="text" name="Amount" placeholder="Amount" /><br/>
<input type="text" name="talktime" placeholder="TalkTime" /> <br />
<input type="text" name="Validity" placeholder="validity" /> <br />
<input type="text" name="description" placeholder="description" /> <br />
<input type="text" name="SchemeType" placeholder="Scheme_Type_ID" /> <br/>
<input type="text" name="Operator" placeholder="operatorID" /> <br />
<input type="submit" name="go" value="submit" />
</form>

</body>
</html>