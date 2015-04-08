<?php
ob_start();
?>
<link href="css3/styles.css" rel="stylesheet" type="text/css" media="all" />
<?php 


//sample php code

//echo $_COOKIE['email'];
if(isset($_COOKIE['email']))
{
$mail=$_COOKIE['email'];
//this will collect data from form
$circle=$_POST['circle'];
$operator = $_POST['operator']; 
$servicenumber = $_POST['servicenumber'];
$amount = $_POST['amount'];
//end of data collection from form


//check whether user enter some data or not
if(empty($operator)){
echo"select operator";
exit;
}
if(empty($servicenumber)){
echo"enter mobile number";
exit;
}
if(empty($amount)){
echo"enter amount";
exit;
}

//end of data input checking
include("dbrecharge.php");
$c="SELECT * FROM circle WHERE Circle_Name='$circle'";
$d=mysql_query($c);
$co=mysql_fetch_object($d);
$code=$co->Code;

$sel="SELECT * FROM operator_details WHERE Operator_ID='$operator'";
//echo $sel;
$qu=mysql_query($sel);
$result=mysql_fetch_object($qu);
$q=$result->Code;
$p=$result->TYPE;
//echo $p;
//echo $q;
date_default_timezone_set("Asia/Kolkata");
$date=date("d-m-Y h:i:sa");
//$time=date("h:i:sa");
//echo $date;
//echo $time;




$b="SELECT * FROM user_details where Email='$mail'";
//echo $b;
$c=mysql_query($b);
$d=mysql_fetch_object($c);
$e=$d->Balance;
$g=$d->user_ID;
$dealer=$d->Dealer;
//echo $e;

$i="INSERT INTO details_recharge(ID, Mobile_No, Type,Circle,Operator, Amount,userID,Date,Balance) VALUES ('Null','$servicenumber','$p','$code','$q','$amount','$g','$date','$e')";
//echo $i;
mysql_query($i);

$s="SELECT * FROM details_recharge ORDER BY `details_recharge`.`ID` DESC Limit 0,1";
//echo $s;
$rel=mysql_query($s);
$r=mysql_fetch_object($rel);
$f=$r->ID;
//echo $f;

if($amount>$e)
{	
	echo "<h1>";
	echo("Insufficient balance");
	echo "<br/>";
	echo("Cannot recharge your device");
	?>
    
     
    <div id="goback_form">
    <form name="post" action="index_transparent.php" enctype="multipart/form-data"> 
     <input type="submit" name="submit" value="Go back"/> 
    </form>
    </div>
    
    
    <?php
	exit;
	
	
}

//common settings
$myjoloappkey = "cdhrumil_shah947"; //your jolo appkey
$mode = "0"; //set 1 for live recharge, set 0 for demo recharge
$myorderid = "$f"; // It is your website generated unique transaction id

//doing recharge now by hitting jolo api1
$ch = curl_init();
$timeout = 0; // set to zero for no timeout
$myurl = "http://www.jolo.in/api/recharge_advance.php?mode=$mode&key=$myjoloappkey&operator=$q&service=$servicenumber&amount=$amount&orderid=$myorderid";
curl_setopt ($ch, CURLOPT_URL, $myurl);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
//echo"$file_contents";

//capture the response from jolo api
//splitting each data as single
$maindata = explode(",", $file_contents);
//echo $maindata;
$transactionid = $maindata[0]; //it is jolo generated transaction id
$jolostatus = $maindata[1]; //it is status of recharge SUCCESS,PENDING OR FAILED
$operator= $maindata[2]; //operator code
$service= $maindata[3]; //mobile number or dth number
$amount= $maindata[4]; //amount
$mywebsiteid= $maindata[5]; //client website order id
$errorcode= $maindata[6]; // api error code when txn fails
$operatorid= $maindata[7]; //original operator transaction id

$ins="INSERT INTO transaction(ID, Jolo_OrderID, Status, Operator, Service, Amount, WebsiteID, Errorcode, OperatorTXNID,userID) VALUES ('Null','$transactionid','$jolostatus','$operator','$service','$amount','$mywebsiteid','$errorcode','$operatorid','$g')";
//echo $ins;
mysql_query($ins);

$select="SELECT * From operator_details Where Code='$operator'";
//echo $select;
$sel=mysql_query($select);
$q=mysql_fetch_object($sel);
echo $q->Commission;
//cases
echo $jolostatus;
if($jolostatus=='SUCCESS'){
	$r=(($q->Commission)/100)*(50/100)*($amount);
	echo $r;
	$e=$e-$amount+$r;
	if($dealer==1)
	{
		$select="SELECT * FROM user_details Where Email='$mail'";
		$sel=mysql_query($select);
		$r=mysql_fetch_object($sel);
		$q=$r->user_ID;

		$select1="SELECT * FROM user_details Where DealerID='$q'";
		$result=mysql_query($select1);
		
	}
	
	$u="UPDATE user_details SET Balance='$e' WHERE Email='$mail'";
	mysql_query($u);
	$select="SELECT  MAX(ID) AS 'maxid' FROM details_recharge";
	$query=mysql_query($select);
	$q=mysql_fetch_object($query);
	$up="UPDATE details_recharge SET Balance='$e' WHERE ID='$q->maxid'";
	//echo $up;
	mysql_query($up);
	header("location:index_transparent.php?upd=Recharge has been done successfully");
	
	exit;
//YOUR REST QUERY HERE
} 
if($jolostatus=='PENDING'){
	exit;
//YOUR REST QUERY HERE
}
if($jolostatus=='FAILED'){
	echo "<h1>";
	echo("There is some error, Cannot process your request");
	echo "<br/>";
	echo("Please try after some time");
	?>
	
    
  <div id="goback_form">
    <form name="post" action="index_transparent.php" enctype="multipart/form-data"> 
     <input type="submit" name="submit" value="Go back"/> 
    </form>
    </div>
    
    </html> 
	
	<?php
    exit;
//YOUR REST QUERY HEREi
}

//TIME OUT CASE OR EMPY REPONSE
if(empty($jolostatus)){
//YOUR REST QUERY HERE
//consider as pending
}


//display the result to customer
echo"Transaction ID: $transactionid (This is jolo orderid)";
echo"<br/>";
echo"Recharge Status: $jolostatus";
echo"<br/>";
echo"Operator: $operator";
echo"<br/>";
echo"Service Number: $service";
echo"<br/>";
echo"Amount: $amount";
echo"<br/>";
echo"Client order id: $mywebsiteid";
echo"<br/>";
echo"Operator Txn ID: $operatorid";
echo"<br/>";
echo"Error No.: $errorcode";
echo"<br/>";
}
else
{
	header("location:index.php?msg=Your session has expired. Please Re-Login");
}
ob_flush();
?>