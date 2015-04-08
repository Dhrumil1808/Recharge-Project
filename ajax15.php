<?php
include("dbrecharge.php");

	if(isset($_POST['operators']))
	
{
	if($_POST['operators']==0)
	{
		
	?>
	 <?php
    }
	else
	{
	$sel="SELECT TYPE FROM operator_details WHERE Operator_ID='$_POST[operators]!=0'";
	//echo $sel;
	$s=mysql_query($sel);
	//echo $_POST['operators'];
	$r=mysql_fetch_object($s);
	$t=$r->TYPE;
	$sel="SELECT * from schemes Where Type=$t";
	//echo $sel;
	$s=mysql_query($sel);
	
	?>
			<div id="schemes">
    		<div id="sc">
          	<select name="schemes" id="scheme">         					 
            <option value="0" selected> Combo </option>
	<?php
	
    while($r=mysql_fetch_object($s))
	{
	?>
<option value="<?php echo $r->Scheme_TYPE_ID;?>"> <?php echo $r->Scheme_Name;?> </option>
<?php
	}
	//header("location:ajax4.php?msg=$t");
	?>
</select>
</div>
</div>
<?php	
}
?>
<table class="scroll" border="2px">
	<tr>
    <td> Amount  </td>
    <td> &nbsp;  </td>
    <td> Talktime </td>
    <td>  &nbsp;  </td>
    <td> Validity </td>
    <td>  &nbsp;  </td>
	<td> Description </td>
       
    </tr>
<?php
$joint="Select Amount,Talktime,Validity,Description,operator_details.Operator_ID From plan_details,schemes,operator_details
	Where schemes.Scheme_TYPE_ID=plan_details.SchemeID  and plan_details.Operator_ID=operator_details.Operator_ID and operator_details.Operator_ID=$_POST[operators]";
	//echo $joint;
	$rel=mysql_query($joint);
	while($r=mysql_fetch_object($rel))
	{
	?>  

<tr>
	
	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan" ><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
  
</tr>
<tr>      </tr>

<?php
	}
		}
	
	
	?>
    </table>

