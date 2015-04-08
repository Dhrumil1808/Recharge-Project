<?php
ob_start();
include("dbrecharge.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Untitled Document</title>

</head>

<body>
<div class="grid1_of_3 left">
<div class="btn_style bg6">
<h4> Enter your registered Email ID or Mobile No</h4> </div>

<div class="forgotpassword_form">
<form name="forgot" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
<span> Email or Phone </span>
<input type="text" name="email" />
<div id="i"><?php if(isset($_POST['submit']))
{
	$f=$_POST['email'];
	$select="SELECT Email,Mobile_No,Password FROM user_details Where Email='$f' or Mobile_No='$f'";
	//echo $select;
	$sel=mysql_query($select);
	$s=mysql_fetch_object($sel);
	 if(mysql_num_rows($sel)==0)
					{
						echo "Not registered";
					}
					else
					{
						$email=$s->Email;
						$password=$s->Password;
						$header  = 'MIME-Version: 1.0' . "\r\n";
						$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$subject="Password request";
						//$header="Dear User";
						$content="Your password is"."&nbsp;".$password."<br/>".
						"Click on the link below to login to your account"."<br/>".
						"<a href='erecharge.futurevisioncomputers.com'> erecharge.futurevisioncomputers.com"."</a>";
						mail($email,$subject,$content,$header);
						header("location:index.php?msg=Password has been sent to given Email id");
							
					}
					
					
				
} ?></div>
  <br/>
<input type="submit" value="Send" name="submit" /> 
</form>
</div>
</div>
</body>

</html>
<?php
ob_flush();
?>