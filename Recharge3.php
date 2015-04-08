
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
include("dbrecharge.php");
if(isset($_POST['submit']))
	{
	$n=$_POST['name'];
	$m=$_POST['mobile'];
	$e=$_POST['email'];
	$p=$_POST['password'];
	$a=$_POST['address'];
	$g=$_POST['gender'];
	$ag=$_POST['age'];
	$l=$_POST['location'];
	
	
	$i="INSERT INTO user_details(`user_ID`, `Name`, `Mobile_No.`, `Email`, `Password`, `Address`, `Gender`, `Age`, `Location`) VALUES ('NULL','$n','$m','$e','$p','$a','$g','$ag','$l')";
	
	mysql_query($i);
	
	}
?>
<table>
	<tr>
    	<td> user_ID </td>
        <td> Name </td>
        <td> Mobile_No </td>
        <td> Email </td>
        <td> Password </td>
        <td> Address </td>
        <td> Gender </td>
        <td> Age </td>
        <td> Location </td>
   </tr>


<?php
 
	include("dbrecharge.php");
	$j="Select * from user_details";
	$rel=mysql_query($j);
	
	
	while($r=mysql_fetch_object($rel))
	{

?>
    		 
	<tr>
    	<td> <?php echo $r->user_ID; ?> </td>
        <td> <?php echo $r-> Name; ?> </td>
        <td> <?php echo $r-> Mobile_No ; ?> </td>
        <td> <?php echo $r-> Email; ?> </td>
        <td> <?php echo $r-> Password; ?> </td>
        <td> <?php echo $r-> Address; ?> </td>
        <td> <?php echo $r-> Gender; ?> </td>
        <td> <?php echo $r-> Age; ?> </td>
        <td> <?php echo $r->Location;?> </td>
        <td> <a href="recharge4.php?del=<?php echo $r->user_ID;?>"> <input type="button" value="delete"/> </a> </td>
   		<td> <a href="Recharge5.php?upd=<?php echo $r->user_ID;?>"> <input type="button" value="update"/> </a> </td>
       
    </tr>

<?php
	}
?>
</table>
 
</body>
</html>