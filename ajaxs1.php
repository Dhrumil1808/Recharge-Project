 <script type="text/javascript">

$(document).ready(function() {
	//alert("hi");
	$("#operator").change(function() {
		//alert ("Hi");
		var plan2=$("#operators").val();
		//alert(plan2);
		$("#grid_user").html('<img src="images/loading37.gif"/>');
		$.ajax({
			type:"POST",
			data:"operators="+ plan2,
			url:"ajax5.php",
			success:function(msg) {
				$("#grid_user").html(msg)
			}
		});
	});


});
</script>

<?php
include("dbrecharge.php");
if(isset($_POST['data']))
{
	$sel="SELECT * FROM recharge_type WHERE Type_ID='$_POST[data]'";
	$query=mysql_query($sel);
	if($_POST['data']==1)
	{
		?>
		<div class="btn_style bg">
				<h4> Recharge Your Mobile</h4>
			</div>
		
       <?php
	}
	if($_POST['data']==2)
	{
		?>
        <div class="btn_style bg">
				<h4> Pay Mobile Bill</h4>
			</div>
        <?php
	}
	if($_POST['data']==3)
	{
		?>
        <div class="btn_style bg">
				<h4> Recharge DTH Connection</h4>
			</div>
       <?php
	}
	if($_POST['data']==4)
	{
		?>
        <div class="btn_style bg">
				<h4> Recharge Datacard Connection</h4>
			</div>
        <?php
	}
	?>
    <div id="recharge_form">
	<form method="post" action="submit-mobile.php" name="recharge" onSubmit="return validate()">
		
                 
                           	 <?php
	//echo $_GET['msg'];
	$s="Select * From circle";
	$rel=mysql_query($s);
	?>
   	<span> Circle </span>
    <div id="circle">
    <select name="circle" class="Circle">
    <option>  Circle </option>
	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option><?php  echo $r->Circle_Name;?> </option>
  	<?php
	}
	
	?>
    </select>
    </div>
    <div id="aa"> &nbsp; </div>
    		<?php
			if($_POST['data']==1 || $_POST['data']==2)
			{
				?>
            <span class="top"> Mobile No </span>
					<input type="text" class="textbox" name="servicenumber" placeholder="Enter Mobile No." maxlength="10">
                    <?php
			}
			if($_POST['data']==3)
			{
			?>
            <span class="top"> DTH No </span>
					<input type="text" class="textbox" name="servicenumber" placeholder="Enter DTH No." maxlength="10">
                    <?php
			}
			if($_POST['data']==4)
			{
			?>
            <span class="top"> Datacard No </span>
					<input type="text" class="textbox" name="servicenumber" placeholder="Enter Datacard No." maxlength="10">
                   <?php
			}
			?>
            
				<div id="ab"> &nbsp; </div>
                	<span class="top">  Operator </span>
	
   	<div id="operator">
    <select name="operator" id="operators">
  	<?php
	
	$s="Select * From operator_details Where TYPE='$_POST[data]'";
	//echo $s;
	$rel=mysql_query($s);
	?>
    <option value="0"> Select operator </option>
    <?php
	while($r=mysql_fetch_object($rel))
	{
	
	?>
    <option value="<?php echo $r->Operator_ID;?>"> <?php  echo $r->Name;?> </option>
  	<?php
	}
	
	
	?>
    </select>
    </div>
   	<div id="ac"> &nbsp; </div>
    <span class="top"> Amount </span>
    <div id="ae">
   <input type="text" placeholder="enter the amount" name="amount" maxlength="4" /> </div>
  <div id="ad"> &nbsp; </div>
  <?php 
  if($_POST['data']==1 || $_POST['data']==3 || $_POST['data']==4)
  {
	  ?>
      
   <input type="submit" name="submit" value="Recharge"/>  
		<?php
  }
   if($_POST['data']==2)
  {
	  ?>
      
   <input type="submit" name="submit" value="Pay"/>  
		<?php
  }
  
        	?>	
                </form>
                </div>
<?php	
}

?>