<?php
ob_start();
if(isset($_COOKIE['email']))
{	
	include("dbrecharge.php");
	if(isset($_POST['submit']))
	{
		$select="SELECT * FROM user_details Where Email='$_COOKIE[email]'";
		$sel=mysql_query($select);
		$r=mysql_fetch_object($sel);
		$i=$r->user_ID;
		$b=$_POST['Bank'];
		$t=$_POST['Trans'];
		$a=$_POST['amount'];
		$d=$_POST['date'];
		
		$ins="INSERT INTO `payment_details`(ID, userID, bank_name,TransactionID, Amount, Date) VALUES (null,'$i','$b','$t','$a','$d')";
		echo $ins;
		mysql_query($ins);
		$header  = 'MIME-Version: 1.0' . "\r\n";
		$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$subject ="Payment for filling balance";
		$content ="Payment of INR"."&nbsp;".$a."&nbsp;"."by"."&nbsp;".$r->Name."&nbsp;"."has been done on". "&nbsp;". $d;
		mail('cooldhrumil_1808@yahoo.co.in',$subject,$content,$header);
		mail('dhrml.shah@gmail.com',$subject,$content,$header);
		header("location:index_transparent.php?msg=Your Balance will be Refilled within 24 hrs");
		
	}
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"> </script>
<title>Payment details</title>
<script type="text/javascript">
 function Bank()
 {
	 var bank=payment.Bank;
	 //alert(Bank.value);
	 var letters=/^[A-Za-z]+$/;
	 if(bank.value.match(letters))
	 {
		 document.getElementById('a').innerHTML='';
		 return true;
	 }
	 else
	 {
		document.getElementById('a').innerHTML='only letters allowed';
		return false;
	 }
	 

	 
 }
 
 function Trans()
 {
	 var transaction=payment.Trans;
	 //alert(transaction.value);
	 var numbers=/^[0-9A-Za-z]+$/;
	 if(transaction.value.match(numbers))
	 {
		 if(transaction.value.length==14)
		 {
		 document.getElementById('b').innerHTML='';
		 return true;
	 }
	 else
	 {
		 document.getElementById('b').innerHTML='Length should be 14';
		 return false;
	 }
	 
	 }
	 
	 else
	 {
		 document.getElementById('b').innerHTML='Only numbers and letters allowed';
		 return false;
	 }
	 
 }
 
 function amount()
 {
	 var Amount=payment.amount;
	 //alert(Amount.value);
	 var numbers=/^[0-9]+$/;
	 if(Amount.value.match(numbers))
	 {
		if(Amount.value<100)
		{
			document.getElementById('c').innerHTML='Minimum amount 100';
			return false;
		}
		else
		{
			document.getElementById('c').innerHTML='';
			return true;
		}
		
	 }
	 else
	 {
		 document.getElementById('c').innerHTML='Only numbers allowed';
		 return false;
	 }
	 
	 
 }
 function date()
 {
	  re = /^\d{4}\-\d{2,2}\-\d{2,2}$/;
	  var date=payment.date;
	  //alert(date.value);
	  
	  if(date.value.match(re))
	  {
		  document.getElementById('d').innerHTML='';
		  return true;
	  }
	  else
	  {
		  document.getElementById('d').innerHTML='Invalid Date format';
		  return false;
	  }
	  
	  
 }
 
 function validate()
 {
		//alert(amount());
		//alert(date());
	 return Bank() && Trans() && amount() && date();
 }
 
 
</script>

</head>

<body>
<div class="wrap">
<div class="grid1_of_3 left1">
<div class="btn_style bg5">
<h4> Payment details </h4>
</div>
<div id="payment_form">
<form name="payment"  onsubmit="return validate()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span class="top"> Bank name </span>
<input type="text" name="Bank" id="a1" placeholder="bank name" onblur="Bank()" />
<div id="a">  </div>
<br/>
<span class="top"> TransactionID  </span>
<input type="text" name="Trans" placeholder="Enter Transaction ID" onblur="Trans()"  />
<div id="b">  </div>
<br/>
<span class="top"> Amount </span>
<input type="text" name="amount" placeholder="Enter amount" onblur="amount()"  />
<div id="c"> </div>
<br/>
<span class="top"> Date of payment </span>
<input type="date" name="date" placeholder="enter date" onblur="date()" />
<div id="d">   </div>
<br/>

<input type="submit" name="submit" value="submit" />
</form>
</div>

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