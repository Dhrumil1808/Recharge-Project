<link href="css3/styles.css" rel="stylesheet" type="text/css" media="all" />
<script>
	$(document).ready(function()
	{
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax6.php",
				success:function(msg)
				{
					$("#type").html(msg)
				}
				
				
				
			});
			
		});
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type1").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax7.php",
				success:function(msg)
				{
					$("#type1").html(msg)
				}
				
				
				
			});
			
		});
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type2").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax8.php",
				success:function(msg)
				{
					$("#type2").html(msg)
				}
				
				
				
			});
			
		});
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type3").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax9.php",
				success:function(msg)
				{
					$("#type3").html(msg)
				}
				
				
				
			});
			
		});
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type4").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax10.php",
				success:function(msg)
				{
					$("#type4").html(msg)
				}
				
				
				
			});
			
		});
		$(".operator li").click(function()
		{
			//alert(this.value);
			$("#type5").html('');
			$.ajax(
			{
				type:"POST",
				data:"o="+this.value,
				url:"ajax11.php",
				success:function(msg)
				{
					$("#type5").html(msg)
				}
				});
			
		});
		
	});

</script>

 <script type="text/javascript">
$(document).ready(function() {
	//alert("hi");
	$("#schemes").change(function() {
		var plan=$("#scheme").val();
		//alert(plan);
		$("#content").html('<img src="images/loading37.gif"/>');
		$.ajax({
			type:"POST",
			data:"plan="+ plan,
			url:"ajax4.php?msg=<?php echo $_POST['operators'];?>",
			success:function(msg) {
				$("#content").html(msg)
			}
		});
	});


});
</script>
<?php

include("dbrecharge.php");
	
	
	if(isset($_POST['operators']))
	
{
	
	
	if($_POST['operators']==0)
	{
		?>
        <div id="content">
		<ul class="operator">
            <pre>
            </pre>
			<?php
			
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type">
            </div>
         	<pre>
            </pre>
            <?php
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 4,4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type1">
            </div>
            	<pre>
                </pre>
              <?php
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 8,4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type2">
            </div>
            <pre>
            </pre>
              <?php
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 12,4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type3">
            </div>
            <pre>
            </pre>
              <?php
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 16,4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type4">
            </div>
            <pre>
            </pre>
              <?php
			$sel="SELECT DISTINCT Image1 FROM operator_details LIMIT 20,4";
			$s=mysql_query($sel);
			
			while($r=mysql_fetch_object($s))
			{
			$op="SELECT Operator_ID FROM operator_details WHERE Image1='$r->Image1'";
			$result=mysql_query($op);
			$re=mysql_fetch_object($result);	
			?>
            &nbsp;
			<li value="<?php echo $re->Operator_ID?>"> <img src="<?php echo $r->Image1;?>"> </li> 
            &nbsp;
           <?php
			}
			?>
            <pre>
            </pre>
            <div id="type5">
            </div>
            </ul>
		</div>
	 
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
            <option value="0" selected="selected"> Combo </option>
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
<div id="content">
<?php if($_POST['operators']!=0)
{
	?>
<table class="scroll" border="2px" id="tab" >
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
$joint="Select Amount,Talktime,Validity,Description,operator_details.Operator_ID From plan_details,schemes,operator_details
	Where schemes.Scheme_TYPE_ID=plan_details.SchemeID  and plan_details.Operator_ID=operator_details.Operator_ID and operator_details.Operator_ID=$_POST[operators]";
	//echo $joint;
	$rel=mysql_query($joint);
	$i=0;
	while($r=mysql_fetch_object($rel))
	{
		$i++;
	?>  
<div id="op">
<tr id="<?php echo $i;?>">
	
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
	
}
	?>
    </table>
</div>

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
		//alert(b);
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
