
<?php
include "dbrecharge.php";
?>
  
	<?php
	//echo $_GET['msg'];
	if(isset($_POST['plan']))
	{
	?>
	<table class="scroll" border="2px" id="tab">
	<tr>
    <td> Amount  </td>
    <td>&nbsp;   </td>
    <td> Talktime </td>
    <td>&nbsp;    </td>
    <td> Validity </td>
    <td>&nbsp;    </td>
	<td> Description </td>
       
    </tr>
    <?php
	 if($_GET['msg']!=0 && $_POST['plan']!=0)
		{
	?>
 	
		
	<?php
    //echo "hi";
	$joint="Select Amount,Talktime,Validity,Description,operator_details.Operator_ID From plan_details,schemes,operator_details
	Where schemes.Scheme_TYPE_ID=plan_details.SchemeID  and plan_details.Operator_ID=operator_details.Operator_ID and operator_details.Operator_ID=$_GET[msg] and plan_details.SchemeID=$_POST[plan]";
	//echo $joint;
	$i=0;
	$rel=mysql_query($joint);
	$num_rows=mysql_num_rows($rel);
	while($r=mysql_fetch_object($rel))
	{
		$i++;
	?>  
<div id="op">
<tr id="<?php echo  $i ?>" >
	
	<td class="plan"><a> <?php echo $r->Amount; ?> </a></td>
    <td width="20"><a> &nbsp; </a>  </td>
    <td class="plan" ><a> <?php echo $r->Talktime; ?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
  
</tr>
<tr>      </tr>
</div>
<?php
	}
	//echo $i;
		}
	if($_POST['plan']==0)
	{
		$i=0;
	$joint="Select Amount,Talktime,Validity,Description,operator_details.Operator_ID From plan_details,schemes,operator_details
	Where schemes.Scheme_TYPE_ID=plan_details.SchemeID  and plan_details.Operator_ID=operator_details.Operator_ID and operator_details.Operator_ID=$_GET[msg]";
	$rel=mysql_query($joint);
	$num_rows=mysql_num_rows($rel);
	while($r=mysql_fetch_object($rel))
	{
		$i++;
	?>  
<div id="op">
<tr id="<?php echo  $i?>">
	
	<td class="plan"><a ><?php echo $r->Amount; ?> </a></td>
    <td width="20"><a > &nbsp; </a>  </td>
    <td class="plan" ><a > <?php echo $r->Talktime; ?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan"> <a ><?php echo $r->Validity;?></a> </td>
    <td width="20" ><a > &nbsp; </a> </td>
    <td class="plan" ><a > <?php echo $r->Description; ?></a> </td>
  
</tr>
<tr>      </tr>
	
</div>
	<?php
	}
	}
	
	?>
    </table>
<?php
	}
	?>
	
 
<script>

$(document).ready(function()
{
	//alert('Hi');
	
	
		//alert('a' + i);	
		//c='a' +i;
		
		//alert(c);
		$("#tab tr").click(function()
		{
		
		//	alert('chal yaar');	
		//alert(this.id);
		//alert('Hello');
		var row=document.getElementById(this.id);
		//alert(row);
		//alert('reached');
		var cells=row.getElementsByTagName("td");
		//alert(cells[0].innerText);
		var b=cells[0].innerText;
		alert(b);
		//alert(v.value);
		$("#ae").html('');
		$.ajax(
		{
			type:"POST",
			data:"amt="+ b,
			url:"amt_ajax.php",
			success:function(msg)
			{
				$("#ae").html(msg)
			}
		});
	
		});
		
	
});


</script>

