<?php
	ob_start();
	include("dbrecharge.php");
	if(isset($_COOKIE['email']))
{
	$value=$_COOKIE['email'];
	
	if(isset($_POST['submit']))
{
	
	$a=$_POST['address'];
	$g=$_POST['gender'];
	$c=$_POST['city'];
	$s=$_POST['state'];
	
	$u="UPDATE user_details SET Address='$a',Gender='$g',City='$c',Location='$s' WHERE Email='$value'";
	mysql_query($u);
	//echo $g;
	header("location:index_transparent.php");
	
}

else
{
	
	$sel="SELECT Address,Gender,City,Location FROM user_details WHERE Email='$value'";
	
	$rel=mysql_query($sel);
	while($r=mysql_fetch_object($rel))
	{



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />

<title>Untitled Document</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function password()
{
	//alert("what abt u");
	var upass=Signup.password;

if(upass.value.length<4 && upass.value.length>0)
{
	document.getElementById('d').innerHTML='Password should be of min. 4 characters';
	upass.value='';
	return false;
	
}

else
{
	document.getElementById('d').innerHTML='&nbsp;';
	return true;
}
}
</script>
</head>
 
<body>
				<div class="grid1_of_3 left">
			<div class="btn_style bg">
 				<h4>Update Your Profile</h4>
			</div>
			<div class="login_form">
				<form method="post" >
					<span>Address </span>
					<input type="text" class="textbox" name="address" placeholder="Enter Address" value=" <?php echo $r->Address;?>"/>
					<span class="top">   Gender </span>
	 <div id="gender">
    <select name="gender">
    <option> Select </option>
    <?php if(!strcmp($r->Gender,"male"))
	{
		?>
        <option value="male" selected="selected"> Male </option>
        <?php
	}
	else
	{
		?>
     <option value="male" > Male </option>   
        <?php
	}
	if(!strcmp($r->Gender,"Female"))
	{
		//echo $r->Gender;
	?>
    <option value="female" selected="selected"> Female </option>
    <?php
	}
	else
	{
	?>
    <option value="female" > Female </option>
	<?php
	}
	?>
    </select>
    </div>
    <span class="top"> City </span>
   <input type="text" placeholder="mention city" name="city" value="<?php echo $r->City;?>"/>
   <span class="top"> State </span>
   
     	 <?php
	include("dbrecharge.php");
	$s="Select * From circle";
	$rel=mysql_query($s);
	?>
   	<div id="state">
    <select name="state" >
    <option> Select </option>
    
	<?php
	while($cir=mysql_fetch_object($rel))
	{
	?>
   	<option> <?php echo $cir->Circle_Name;?> </option>
  	
	<?php
	if(!strcmp($r->Location,$cir->Circle_Name))
	{
		?>
        <option selected="selected"> <?php echo $r->Location; ?> </option>
        <?php
	}
	}
	
	?>
   </select>
   </div>
  <br/>
   <input type="submit" name="submit" value="Update"/>  
					
				</form>
				
		
               
				
		</div>
	</div>
    
    
</body>
</html>
<?php
}
}
}
else
{
	header("location:index.php?msg=Your session has expired. Please Re-Login");
}
ob_flush();
?>