<?php
ob_start();
if(isset($_COOKIE['email']))
{
include("dbrecharge.php");
$value=$_COOKIE['email'];
$select="SELECT * FROM user_details Where Email='$value'";
$sel=mysql_query($select);
$r=mysql_fetch_object($sel);
$q=$r->user_ID;

$select1="SELECT * FROM user_details Where DealerID='$q'";
$result=mysql_query($select1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Commission</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css3/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div class="wrap">
<div class="report">
<div id="report"> Commission Report </div>
&nbsp;
<table cellspacing="20px">
<tr>
<td> Date </td>
<td width="50"> </td>
<td> Particulars </td>
<td width="50"> </td>
<td> Commission </td>
<td width="50"> </td>
<td> Balance </td>
</tr>
<tr>
<?php
while($r1=mysql_fetch_object($result))
				{

$joint="SELECT Mobile_No,details_recharge.Type,details_recharge.Operator,details_recharge.Amount,WebsiteID,Balance,Date,Commission FROM details_recharge,transaction,operator_details Where  details_recharge.userID='$r1->user_ID' and details_recharge.ID = transaction.WebsiteID and details_recharge.Operator=operator_details.Code GROUP BY WebsiteID";
//echo $joint;
	$query=mysql_query($joint);
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
      <td> <?php echo ($q->Commission/100)*30/100*($q->Amount);?> </td> 
       <td width="50"> </td>
       <td> <?php echo $total= $r->Balance + ($q->Commission/100)*30/100*($q->Amount);?> </td>
      </tr>
      <?php	 
	  			}
				}
	   ?>
       
      </table>
      </div>
      </div>
      </body>
	  </html>
<?php
				//header("location:index_transparent.php?Sum='$total'");
			
				$u="UPDATE user_details SET Balance='$total' Where Email='$value' ";
		        //echo $u;
				$up=mysql_query($u);	
	            //header("location:Commission.php");
}	
else
{
	header("location:index.php?msg=Your session has expired. Please Re-Login");
}
ob_flush();
?>