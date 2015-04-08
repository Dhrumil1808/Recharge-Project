<?php
ob_start();
include("dbrecharge.php");
if(isset($_POST['submit']))
	{
	
	$n=$_POST['name'];
	$m=$_POST['mobile'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$hash=md5(rand(0,1000));
	//echo $hash;
	$select="SELECT * FROM user_details Where Name='$n' or Email='$e' or Mobile_No='$m'";
	
	$sel=mysql_query($select);
	$r=mysql_fetch_object($sel);
	
	if(mysql_num_rows($sel)==0)
	{
	$i="INSERT INTO user_details(user_ID, Name, Mobile_No, Email, Password,DealerID,Balance,hash,active) VALUES ('NULL','$n','$m','$e','$p',0,0,'$hash',0)";
	//echo $i;
	mysql_query($i);
	$query="SELECT * FROM user_details Where Name='$n'";
	$result=mysql_query($query);
	$t=mysql_fetch_object($result);
	$email=$t->Email;
	$password=$t->Password;
	echo $email;
	
	$subject="Account verification";
	//$header="Dear User";
	$content="Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
	------------------------
	Username: $n
	Password: $password
	------------------------
 
Please click this link to activate your account:
http://erecharge.futurevisioncomputers.com/index.php?email=$email&hash=$hash";
	mail($email,$subject,$content);
	header("location:index.php?msg=Verification link has been send to EmailID");
	
	}
	
	}
	

?> </div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"> </script>
<script type="text/javascript">

function username()
{
	//alert("hi");
	var uname=Signup.name;
	//alert(uname);
	var letters=/^[0-9A-Za-z]+$/;
	
		
	if(uname.value.match(letters))
	{
		if(uname.value.length<4)
		{
			document.getElementById('a').innerHTML='Username of Minimum Length 4';
			uname.value='';
			return false;
		}
		else
		{
			document.getElementById('a').innerHTML='&nbsp;';
			return true;
		}
			
			
		
	}
	else 
	{
	document.getElementById('a').innerHTML='Minimum length 4 and no special symbols';
	uname.value='';
	return false;
	
	}
	
}


function mobile()
{
	//alert("how are you");
	var umob=Signup.mobile;

	var numbers=/^[0-9]+$/;	

	if(umob.value.match(numbers))
{
	if(umob.value.length!=10)
	{
		
	document.getElementById('b').innerHTML='Please enter 10 digit Mobile Number';
		umob.value='';
		return false;
		
	}
	else
	{
		document.getElementById('b').innerHTML='&nbsp;';
		return true;
				}

}
else
{
	document.getElementById('b').innerHTML='Enter Mobile No.';
	umob.value='';
	return false;
}
}

function email()
{
	//alert("i am fine");
	var uemail=Signup.email;
	var mailformat =           /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(uemail.value.match(mailformat))
	{
		document.getElementById('c').innerHTML='&nbsp;';
		return true;
				
	}
	else
	{
		document.getElementById('c').innerHTML='Enter Full Email ';
		uemail.value='';
		return false;
			}
}
function password()
{
	//alert("what abt u");
	var upass=Signup.password;

if(upass.value.length<4)
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
function password1()
{
	var upass1=Signup.password1;
	//alert(upass1);
	var upass=Signup.password;
	//alert(upass);
	if(upass1.value==upass.value)
	{
	document.getElementById('e').innerHTML='&nbsp;';
	return true;
	}
	else
	{
		document.getElementById('e').innerHTML='Password not matching with above';
		return false;
	}
	
}

function verify()
{

}

function validate()
{
	/*alert(username());
	alert(mobile());
	alert(email());
	alert(password());*/
	//alert(verify());
	return username() && mobile() && email() && password() && password1();
	
}
</script>
<script type="text/javascript">
$(document).ready(function(){
	
		//alert("first");
	$("#1").click(function () {
			
			var b=$("#a1").val();
		//alert(b);
	$("#a").html('');
			$.ajax({
				type: "POST",
				data: {data:b},
				url: "availability.php",
				cursor:"pointer",
				success: function(msg){
					$("#a").html(msg)
				}
			});
			
	});
		//alert("first");
		//alert("hi");
		$("#2").click(function () {
		var b=$("#b1").val();
		//alert(b);
	$("#b").html('');
			$.ajax({
				type: "POST",
				data: {dat:b},
				url: "availability.php",
				cursor:"pointer",
				success: function(msg){
					$("#b").html(msg)
				}
			});
		});
					//alert("hi");
	$("#3").click(function () {
			var b=$("#c1").val();
		//alert(b);
	$("#c").html('');
			$.ajax({
				type: "POST",
				data: {da:b},
				url: "availability.php",
				cursor:"pointer",
				success: function(msg){
					$("#c").html(msg)
				}
			});
		});
	});
</script>
</head>

<body>

<div class="grid1_of_3 left1">
<div class="btn_style bg5">
				<h4>Create Your Account</h4>
                </div>
<div id="signup_form">
<form name="Signup"  onsubmit="return validate()" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<span> Username </span>
<input type="text" id="a1"name="name" placeholder="Username" onBlur="username()"/> 
<br />
<ul> <div id="j"> <li id="1"> Check Availability </li> </div> </ul>
<br />
<div id="a">
		<?php if(isset($_POST['submit']))
			{
				$n=$_POST['name'];
				$select="SELECT Name FROM user_details where Name='$n'";
				$sel=mysql_query($select);
				//$r=mysql_fetch_object($sel);
				if(mysql_num_rows($sel)!=0)
				{
					echo "Username already exists";
				}
				else
				{
					echo "&nbsp;";
				}
				
			}
			else
			{
				echo "No special Symbols and minimum 4 characters long";
			}
			
			?></div> 
<span class="top"> Mobile No. </span>
<input type="text" id="b1" name="mobile" placeholder="Mobile no." onBlur="mobile()" />

 <div id="b">
 	<?php if(isset($_POST['submit']))
			{
				$m=$_POST['mobile'];
				$select="SELECT Mobile_No FROM user_details where Mobile_No='$m'";
				$sel=mysql_query($select);
				//$r=mysql_fetch_object($sel);
				if(mysql_num_rows($sel)!=0)
				{
					echo "Mobile No. already exists";
				}
				else
				{
					echo "&nbsp;";
				}
				
			}
			else
			{
				echo "&nbsp;";
			}
			
			?></div> 
<span class="top"> E-mail </span> 
 <input type="text" id="c1" name="email" placeholder="E-mail" onBlur="email()"/> 

 <div id="c"> 
 			<?php if(isset($_POST['submit']))
			{
				$e=$_POST['email'];
				$select="SELECT Email FROM user_details where Email='$e'";
				$sel=mysql_query($select);
				//$r=mysql_fetch_object($sel);
				if(mysql_num_rows($sel)!=0)
				{
					echo "Email already exists";
				}
				else
				{
					echo "&nbsp;";
				}
				
				
			}
			else
			{
				echo "&nbsp;";
			}
			
			?></div> 
 <span class="top"> Password </span>
 <input type="password" name="password" id="d1" placeholder="Password" onBlur="password()" />
<div id="d"> minimum 4 characters long </div> 
<span class="top"> Confirm Password </span>
<input type="password" name="password1" id="e1" placeholder="Password" onBlur="password1()"  />
<div id="e"> Re type password </div>

<div class="image"> 

    </div>
<div id="f"> &nbsp; </div>
<input type="submit" id="d2" name="submit" value="Create my Account" />

</form>
</div>
</div>
</body>
</html>

<?php
ob_flush();
?>