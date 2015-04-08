<?php
ob_start();
if(isset($_COOKIE['email']))
{
$value=$_COOKIE['email'];
include("dbrecharge.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript">
function validate()
{
var date1=payment.start;
var date2=payment.end;
	
	if(date1.value==''|| date2.value=='')
	{
		document.getElementById('v').innerHTML='Please enter both the dates';
		return false;
	}
	else
	{
		document.getElementById('v').innerHTML='';
		return true;
	}
	
	
}

</script>
</head>

<body>
<div class="wrap">
<div class="grid1">
<div id="date_form">

<form name="payment"  onsubmit="return validate()" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<span class="top" >From </span>

<input type="date" name="start" placeholder="yyyy-mm-dd">
<span class="top"> To </span> 
<input type="date" name="end"  placeholder="yyyy-mm-dd"/>
<input type="submit" value="Generate" name="Generate" />
</form>
</div>
<div id="goback_form">
 <form name="post" action="index_transparent.php" enctype="multipart/form-data"> 
     <input type="submit" name="Go back" value="Go back"/> 
    </form>
    </div>
   <div id="v"> </div> 
    </div>
<div class="report">
<div id="report"> Your  Transaction Report </div>
<br/>
 <?php

$rel="SELECT * FROM `user_details` WHERE Email='$value'";
$r=mysql_query($rel);
$t=mysql_fetch_object($r);
$id=$t->user_ID;
$dealer=$t->Dealer;
//echo $id;


if(isset($_POST['Generate']))
{
	$start=$_POST['start'];
	$end=$_POST['end'];
		
$joint="SELECT Mobile_No,details_recharge.Type,details_recharge.Operator,details_recharge.Amount,WebsiteID,Balance,Date,Time,Commission FROM details_recharge,transaction,operator_details Where  details_recharge.userID='$id' and details_recharge.ID = transaction.WebsiteID and details_recharge.Operator=operator_details.Code and Date<='$end' and Date>='$start' GROUP BY WebsiteID DESC";
//echo $joint;
	 
	 
}

else
{	
$joint="SELECT Mobile_No,details_recharge.Type,details_recharge.Operator,details_recharge.Amount,WebsiteID,Balance,Date,Time,Commission FROM details_recharge,transaction,operator_details Where  details_recharge.userID='$id' and details_recharge.ID = transaction.WebsiteID and details_recharge.Operator=operator_details.Code GROUP BY WebsiteID DESC";
}



//echo $joint;
$query=mysql_query($joint);
if(mysql_num_rows($query)==0)
{
	?>
    <div class="red">
    <?php
	echo "No transactions to display";
	?>
    </div>
    <?php
}

else
{
?>

<table cellspacing="20px" >
	<tr> 
    	<td> Date </td>
        <td width="50"> </td>
        <td> Particulars </td>
         <td width="50"> </td>
        <td> Credit </td>
         <td width="50"> </td>
        <td> Debit </td>
         <td width="50"> </td>
        <td> Discount </td>
         <td width="50"> </td>
        
         <td> Balance </td>
        
        
		 
    </tr>
    <tr>   </tr>
	<tr>
   
<?php
while($q=mysql_fetch_object($query))
				{
?>
   <td>  <?php echo $q->Date; "&nbsp;" ?>
   <?php echo $q->Time;?> 
   			</td>
    <td width="50"> </td>
   <td> <?php 
				
				if($q->Type==1)
   			{
				echo "Recharge of Mobile No. "."&nbsp;". $q->Mobile_No. "&nbsp;"."&nbsp;"." with Transaction ID  "."&nbsp;". $q->WebsiteID;
			}
							
			if($q->Type==2)
			{
				echo "Bill of "."&nbsp;". $q->Mobile_No."&nbsp;"."&nbsp;"." with Transaction ID "."&nbsp;". $q->WebsiteID;
			}
			
			if($q->Type==3)
			{
				echo "Recharge of DTH No."."&nbsp;".$q->Mobile_No ."&nbsp;". " with Transaction ID "."&nbsp;". $q->WebsiteID; 
			}
			
			if($q->Type==4)
			{
				echo "Recharge of Datacard No."."&nbsp;". $q->Mobile_No. "&nbsp;". " with Transaction ID  "."&nbsp;". $q->WebsiteID;
			}
			
				
			?> 
                           
                            </td>
    	 <td width="50"> </td>  
      <td>             </td>
       <td width="50"> </td>
      <td> <?php echo $q->Amount; ?> </td>
       <td width="50"> </td>
      <td> <?php echo ($q->Commission/100)*50/100*($q->Amount);?> </td> 
       <td width="50"> </td>
       
      <td> <?php echo $q->Balance;?> </td>
      
      </tr>
     
	<?php
      
}
	  ?> 

        
</table>
<?php
}
?>

<?php if($dealer==1)
{
	
	$select="SELECT * FROM user_details Where DealerID='$id'";
	$sel=mysql_query($select);
	
	while($r=mysql_fetch_object($sel))
	{
		?>
    
    <br/>
    <div id="report"><?php echo $r->Name. "&nbsp;"."Transaction Report"; ?></div>
	<br/>
		
	
    <?php
	if(isset($_POST['Generate']))
	{
		$start=$_POST['start'];
		$end=$_POST['end'];
		$joint="SELECT Mobile_No,details_recharge.Type,details_recharge.Operator,details_recharge.Amount,WebsiteID,Balance,Date,Time,Commission FROM details_recharge,transaction,operator_details Where  details_recharge.userID='$r->user_ID' and details_recharge.ID = transaction.WebsiteID and details_recharge.Operator=operator_details.Code and Date<='$end' and Date>='$start' GROUP BY WebsiteID DESC";
	}
else
{	
$joint="SELECT Mobile_No,details_recharge.Type,details_recharge.Operator,details_recharge.Amount,WebsiteID,Balance,Date,Time,Commission FROM details_recharge,transaction,operator_details Where  details_recharge.userID='$r->user_ID' and details_recharge.ID = transaction.WebsiteID and details_recharge.Operator=operator_details.Code GROUP BY WebsiteID DESC";
}

//echo $joint;
$query=mysql_query($joint);
if(mysql_num_rows($query)==0)
{
	?>
    <div class="red">
    <?php
	echo "No transactions to display";
	?>
    </div>
    <?php
}

else
{

?>

     	<table cellspacing="20px" >
		<tr> 
    	<td> Date </td>
        <td width="50"> </td>
        <td> Particulars </td>
         <td width="50"> </td>
        <td> Credit </td>
         <td width="50"> </td>
        <td> Debit </td>
         <td width="50"> </td>
        <td> Discount </td>
         <td width="50"> </td>
        <td> Balance </td>
         
    </tr>
    <tr>   </tr>
	<tr>        
<?php
while($q=mysql_fetch_object($query))
				{
?>
   <td>  <?php echo $q->Date;?> </td>
    <td width="50"> </td>
   <td> <?php 
				
				
				if($q->Type==1)
   			{
				echo "Recharge of Mobile No. "."&nbsp;". $q->Mobile_No. "&nbsp;"."&nbsp;"." with Transaction ID  "."&nbsp;". $q->WebsiteID;
			}
							
			if($q->Type==2)
			{
				echo "Bill of "."&nbsp;". $q->Mobile_No."&nbsp;"."&nbsp;"." with Transaction ID "."&nbsp;". $q->WebsiteID;
			}
			
			if($q->Type==3)
			{
				echo "Recharge of DTH No."."&nbsp;".$q->Mobile_No ."&nbsp;". " with Transaction ID "."&nbsp;". $q->WebsiteID; 
			}
			
			if($q->Type==4)
			{
				echo "Recharge of Datacard No."."&nbsp;". $q->Mobile_No. "&nbsp;". " with Transaction ID  "."&nbsp;". $q->WebsiteID;
			}
			?> 
                            
       </td>
       <td width="50"> </td>  
      <td>             </td>
       <td width="50"> </td>
      <td> <?php echo $q->Amount; ?> </td>
       <td width="50"> </td>
      <td> <?php  echo ($q->Commission/100)*50/100*($q->Amount); ?> </td> 
       <td width="50"> </td>
      <td> <?php echo $q->Balance; 
                     ?></td>
      
      </tr>
     
	<?php
      
}
	  ?> 

        
</table>
	
		<?php
	}
	}
	
	
}
else
{
}
?>

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