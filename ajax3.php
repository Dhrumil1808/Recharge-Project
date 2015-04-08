 <script type="text/javascript">
$(document).ready(function() {
	//alert("hi");
	$("#scheme").change(function() {
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
	 <p class="t">In order to view <b> Plans </b>, click on that respective operator. </p>       
		
	<?php
    }
	else
	{

	$sel="SELECT TYPE FROM operator_details WHERE Operator_ID='$_POST[operators]'";
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
    		<label>
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
</label> 
</div>
<?php	
}
}

?>