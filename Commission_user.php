<?php
include("dbrecharge.php");
$value=$_COOKIE['name'];


$select1="SELECT * FROM `operator_details` WHERE TYPE=1";
$rel1=mysql_query($select1);

$select2="SELECT * FROM `operator_details` WHERE TYPE=2";
$rel2=mysql_query($select2);

$select3="SELECT * FROM `operator_details` WHERE TYPE=3";
$rel3=mysql_query($select3);

$select4="SELECT * FROM `operator_details` WHERE TYPE=4";
$rel4=mysql_query($select4);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<table cellspacing="5">

<tr> 
<td>  Prepaid Operators  </td>
<td> Commission </td>
</tr>

<tr>
<td>   </td>
 
</tr>

<tr>
<?php
while($r1=mysql_fetch_object($rel1))
{
?>

<td> <?php echo $r1->Name; ?> </td>
<td> <?php echo ($r1-> Commission)*(60/100); ?>

</tr>
<?php
}

?>
<tr>
<td>   </td>
 
</tr>
<tr>
<td> Postpaid Operators  </td>
<td> Commission </td>
 
</tr>
<tr>
<?php
while($r2=mysql_fetch_object($rel2))
{
?>

<td> <?php echo $r2->Name; ?> </td>
<td> <?php echo ($r2-> Commission)*(60/100); ?>

</tr>
<?php
}

?>
<tr> 
	<td> </td>
     </tr>
     
   <tr> 
   <td> DTH Operators </td>
   <td> Commission </td>
   </tr>  
   <tr>
<?php
while($r3=mysql_fetch_object($rel3))
{
?>

<td> <?php echo $r3->Name; ?> </td>
<td> <?php echo ($r3-> Commission)*(60/100); ?>

</tr>
<?php
}

?>
<tr> 
<td>     </td>
</tr>

<tr> 
<td> Datacard Operators </td>
<td> Commission </td>
</tr>
<tr>
<?php
while($r4=mysql_fetch_object($rel4))
{
?>

<td> <?php echo $r4->Name; ?> </td>
<td> <?php echo ($r4-> Commission)*(20/100); ?>

</tr>
<?php
}

?>

</table>
</body>
</html>