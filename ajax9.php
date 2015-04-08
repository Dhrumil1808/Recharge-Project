<script>
$(document).ready (function(){

	$("input:radio").change(function()
	{
		//alert(this.value);
		$("#switch").html('<img src="images/loading37.gif"/>');
		$.ajax
		({
			type:"POST",
			data:"b="+this.value,
			url:"ajax12.php?msg=<?php echo $_POST['o'];?>",
			success:function(msg)
			{
				$("#switch").html(msg)
			}
			
		})
		
		
	})
})
</script>
<?php
include("dbrecharge.php");
if(isset($_POST['o']))
{
	if($_POST['o']>=18 && $_POST['o']<=21)
	{
		$i=0;
		$j=0;
		$k=0;
		$l=0;
		$sel="SELECT * FROM operator_details WHERE Operator_ID='$_POST[o]'";
		$s=mysql_query($sel);
		$r=mysql_fetch_object($s);
		$t=$r->Name;
		//echo $t;
		$new="SELECT TYPE FROM operator_details WHERE Name LIKE '%$t%'";
		$new1=mysql_query($new);
		while($new2=mysql_fetch_object($new1))
		{
			if($new2->TYPE==1)
			{
				
				$i++;	
				if($i==1)
				{
				?>
                <input type="radio" name="operator" value="<?php echo $new2->TYPE?>"> prepaid </input>
                <?php
				}
				
			}
			if($new2->TYPE==2)
			{
				$j++;
				if($j==1)
				{
				?>
                <input type="radio" name="operator" value="<?php echo $new2->TYPE?>"> postpaid </input> 
                <?php
				}
			}
			if($new2->TYPE==3)
			{
				$k++;
				if($k==1)
				{
				?>
                <input type="radio" name="operator" value="<?php echo $new2->TYPE?>"> DTH </input> 
                <?php
				}
			}
			if($new2->TYPE==4)
			{
				$l++;
				if($l==1)
				{
				?>
                <input type="radio" name="operator" value="<?php echo $new2->TYPE?>"> Datacard </input> 
                <?php
				}
				
			}
			
		}
		
		
		
		
	}
	
	
}
?>