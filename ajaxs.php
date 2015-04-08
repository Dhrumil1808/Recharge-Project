 <script type="text/javascript">
$(document).ready(function() {
	//alert("hi");
	$("#operators").change(function() {
		//alert ("Hi");
		var plan2=$("#operators").val();
		//alert(plan2);
		$("#schemes").html('<img src="images/loading37.gif"/>');
		$.ajax({
			type:"POST",
			data:"operators="+ plan2,
			url:"ajax3.php",
			success:function(msg) {
				$("#schemes").html(msg)
			}
		});
	});


});
</script>

<?php

if(isset($_POST['data']))
{
	include("dbrecharge.php");	
	
	$s1="SELECT * FROM `recharge_type`";
		$rel1=mysql_query($s1);
	
	if($_POST['data']==2)
	{
	?>
   
	 <?php
	$s="Select * From operator_details Where Type='$_POST[data]'";
	$rel=mysql_query($s);
	?>
   	<label>
    <select name="operator" id="operators">
    <option> Postpaid  operators  </option>
	<?php
	while($r=mysql_fetch_object($rel))
	{
		echo $r->Operator_ID;
	?>
   
    <option value=<?php echo $r->Operator_ID;?>><img src="<?php echo $r->Image;?>" /> <?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
    </label>
    <?php
	
}
else if($_POST['data']==3)
{
	

?>
		
	
   	<label>
    <select name="operator" id="operators">
    <option> DTH operators </option>
	<?php
	$s="Select * From operator_details Where Type='$_POST[data]'";
	$rel=mysql_query($s);
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option value="<?php echo $r->Operator_ID?>"><?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
	</label>
       <?php
}

else if($_POST['data']==4)
{
?>
		
   <label>	
    <select name="operator" id="operators">
    <option> Datacard operators </option>
	<?php
	$s="Select * From operator_details Where Type='$_POST[data]'";
	$rel=mysql_query($s);
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option value="<?php echo $r->Operator_ID?>"><?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
 	</label>
        <?php
}
else if($_POST['data']==1)
{
	?>
	
   	<label>
    <select name="operator" id="operators">
    <option> Prepaid operators </option>
	<?php
	$s="Select * From operator_details Where Type='$_POST[data]'";
	$rel=mysql_query($s);
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option value="<?php echo $r->Operator_ID?>"><?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
   	</label>

<?php
}


else
{
	echo "No type selected";
}
}
?>
