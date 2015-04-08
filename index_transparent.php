<?php
ob_start();
include("dbrecharge.php");
if(isset($_COOKIE['email']))
{
	$email=$_COOKIE['email'];
	$select="SELECT * FROM user_details Where Email='$email'";
	$query=mysql_query($select);
	$check=mysql_fetch_object($query);
	$name=$check->Name;	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css3/styles.css" rel="stylesheet" type="text/css" media="all" />
<!--<script src="js1/Chart.js"></script>-->
<script type="text/javascript" src="js1/Chart.js"> </script>
<script type="text/javascript" src="js/jquery.js"> </script>
<script src="js/msdropdown/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/msdropdown/jquery.dd.min.js" type="text/javascript"></script>
 
<script type="text/javascript">

function circle()
{
	var c=recharge.circle;
	if(c.value=='Circle')
	{
		document.getElementById('aa').innerHTML='Select Circle from dropdown';
		return false;
	}
	else
	{
		document.getElementById('aa').innerHTML='&nbsp;';
		return true;
	}
	
	
}
function mobile()
{
	var m=recharge.servicenumber;
	if(m.value.length!=10)
	{
		document.getElementById('ab').innerHTML='Enter 10 digit No.';
		return false;
	}
	
	else
	{
		document.getElementById('ab').innerHTML='&nbsp;';
		return true;
	}
	
}

function operator()
{
	var o=recharge.operator;
	if(o.value=='Select')
	{
		document.getElementById('ac').innerHTML='Select one of the operators';
		return false;
	}
	else
	{
		document.getElementById('ac').innerHTML='&nbsp;';
		return true;
	}
	
	
}

function amount()
{
	var a=recharge.amount;
	<?php
	//echo $_POST['amt'];
	if(isset($_POST['amt']))
	{
	 
	?>
	a.value=<?php echo $_POST['amt']; ?>
	//alert(a.value);
	<?php
	}
	else
	{
	}
	
	?>
	
	//alert(a.value);
	if(a.value<10)
	{
		document.getElementById('ad').innerHTML='Enter minimum amount of 10';
		return false;
	}
	else
	{
		document.getElementById('ad').innerHTML='&nbsp;';
		return true;
	}
	
}

function amount1()
{
	var a=recharge.amount;
	
	if(a.value<100)
	{
		document.getElementById('ad').innerHTML='Enter minimum amount of 100';
		return false;
	}
	else
	{
		document.getElementById('ad').innerHTML='&nbsp;';
		return true;
	}
	
}

function validate()
{
	return circle() && mobile() && operator() && amount();
}
function validate1()
{
	return circle() && mobile() && operator() && amount1(); 
}

 


</script>

<script type="text/javascript">
 	$(document).ready(function(){
	
		//alert("first");
	$(".types li").click(function () {
			
			//alert(this.value);
			
			//alert("first im ");
	
			//alert("hi");
	$("#switch").html('<img src="images/loading37.gif"/>');
			$.ajax({
				type: "POST",
				data: "data="+ this.value,
				url: "ajaxs1.php",
				cursor:"pointer",
				success: function(msg){
					$("#switch").html(msg)
				}
			});
			
		//alert("first");
		
		});
	});

	
	
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#operators").change(function() {
		//alert ("Hi");
		var plan2=$("#operators").val();
		//alert(plan2);
		$("#schemes").html('<img src="images/loading37.gif"/>');
		$.ajax({
			type:"POST",
			data:"operators="+ plan2,
			url:"ajax5.php",
			success:function(msg) {
				$("#schemes").html(msg)
			}
		});
	});
});
</script>

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

<script type="text/javascript">
	$(document).ready(function()
	{
		//alert("HI");
		$("#plan").change(function() {
			//alert("hello");
			var types=$("#plan").val();
			//alert(types);
			$("#graphs").html('<img src="images/loading37.gif"/>');
			//alert("hi");
			$.ajax({
				type:"POST",
				data:"type="+types,
				url:"graph.php",
				success:function(msg) {
					$("#graphs").html(msg)
				}
				});
		
	});
	});
</script>
<script>
	$(document).ready(function()
	{
		
		$("#year").change(function()
		{
			var years=$("#year").val();
			//alert(years);
			$("#type_graph").html('');
			$.ajax({
				type:"POST",
				data:"year="+years,
				url:"types_ajax.php",
				success:function(msg) {
					$("#type_graph").html(msg)
				}
				});
		});
		
	});
	
</script>

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
</head>
<body>

<div class="wrap">
	 <?php
	$sel="SELECT * FROM user_details Where Email='$email'";
	$s=mysql_query($sel);
	$r=mysql_fetch_object($s);
	?>
    <div class="balance">
    <?php if(isset($_REQUEST['upd']))
	{
		echo $_GET['upd'];
		echo "<br/>";
	}
	
	?>
    <?php
	echo ("Your session will expire in 15 minutes");
		
	 echo "<br/>"."Your current balance is   ";
	 	if(isset($_REQUEST['Sum']))
	{
		echo $_GET['Sum'];
	}
		else
		{
		echo $r->Balance;
		"<br/>";
		}
		
		if($r->Balance<=100)
		{
			echo "<br/>"."Please fill in balance in your account";
		}
		else
		{
			echo "&nbsp;";
		}
		
	?>
	</div>	
	<!-- start grids_of_3 -->
	<div class="grids_of_3">
   
    <div class="grid1_of_3">
			
			
			<div class="menu_box_list">
				<ul>
                <?php
				if(isset($_REQUEST['msg']))
				{
					?>
                	<li> <a href="#"> <span> <?php echo $_GET['msg']; ?> </span> <div class="clear"> </div> </a>     </li> <?php } ?>
                	<li> <a href="#"> <span> <?php echo "Welcome"."&nbsp".$name."<br />";?> </span> <i class="welcome"> </i> <div class="clear"> </div> </a> </li>

					<li><a href="profilesetting.php"><span>Edit Profile</span> <i class="settings"> </i><div class="clear"></div> </a></li>
					
					<li><a href="transactionreport.php"><span>Transaction Report</span> <i class="favorite"> </i><div class="clear"></div> </a></li>
                    <?php
					$dealer=$check->Dealer;
					if($dealer==1)
					{
					?>
          <li> <a href="createuser.php"> <span> Create Users </span> <i class="food"> </i> <div class="clear"> </div> </a> </li>
          <li> <a href="Commission.php"> <span> Commission Report </span> <i class="favorite"> </i> <div class="clear"> </div> </a> </li>
		  <?php
					}
					?>
          <li> <a href="paymentdetails.php"> <span> Payment details </span> <i class="payment"> </i> <div class="clear"> </div> </a> </li>          
          <li> <a href="passwordchange.php"> <span> Change Password </span> <i class="password"> </i> <div class="clear"> </div> </a> </li>          
  	<li> <a href="logout.php"> <span> Logout </span> <i class="signout"> </i> <div class="clear"> </div> </a> </li>                  

				</ul>
				<div class="clear"></div>
			</div>
		</div>
       
		<div class="grid1_of_3 left">
        <ul class="types">
        <?php
		
		$s="Select * From recharge_type";
		$rel=mysql_query($s);
		while($r=mysql_fetch_object($rel))
		{
		?>
        
        <li value="<?php echo $r->Type_ID;?>">  
        <i class="icon1"> </i>
        <strong> <?php echo $r->TYPE;?> </strong>
        
         </li>
       
        <?php }?>
         </ul>
         <div id="switch">
			<div class="btn_style bg">
			<h4>Recharge Your Mobile</h4>
			 </div>
            
     	<div id="recharge_form">
		<form method="post" action="submit-mobile.php" name="recharge" onSubmit="return validate()" enctype="multipart/form-data" >
         <?php
	
		$s="Select * From circle";
		$rel=mysql_query($s);
		?>
   		<span> Circle </span>
    	<div id="circle">
   		<select name="circle">
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
			<span class="top">Mobile No </span>
					<input type="text" class="textbox" name="servicenumber" maxlength="10" placeholder="Enter Mobile No.">
                    
    <div id="ab"> &nbsp; </div>                
			<span class="top">Operator </span>
	 <?php
	
	$s="Select * From operator_details Where Type='1'";
	$rel=mysql_query($s);
	?>
    <div id="operator">

    <select name="operator" id="operators">
    <option value="0"> Select operator </option>
   	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option value="<?php echo $r->Operator_ID; ?>"><?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
  
   </div>
  <div id="ac">  &nbsp; </div>
    <span class="top"> Amount </span>
   <div id="ae"> 
 
   <input type="text"  placeholder="enter the recharge amount" name="amount"  maxlength="4" />  
   </div>
   <div id="ad"> &nbsp; </div>
   <input type="submit" name="submit" value="Recharge"/> 
				
                </form>
               
				
		</div>
      	</div>
		</div>
        
       <div class="grid1_of_3 left" id="plans">
       <div class="btn_style bg1">
				<h4>Plans and Schemes</h4>
			</div>
				<div id="grid_user">
            <div id="schemes">
    
			</div>
		
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
		</div> 
		</div>
				
		
		
		<div class="clear"></div>
		
        <div class="grid1_of_3">
        <div id="year_form">
        <select name="year" id="year">
        
        <option value="2014" selected="selected"> 2014 </option>
        <option value="2015">  2015 </option>
        </select>
        </div>
        <div id="type_graph">
        <div id="plans_form">
        <select name="plans" id="plan">
        <option value="5" selected="selected"> All </option>
             <?php
		
		$s="Select * From recharge_type";
		$rel=mysql_query($s);
		while($r=mysql_fetch_object($rel))
		{
		?>
        
        <option value="<?php echo $r->Type_ID;?>">  <?php echo $r-> TYPE; ?> 
        
         </option>
       
        <?php
		}
		 
		?>
        	
            </select>
        </div>
            <div id="graphs">
            <?php
			$year="SELECT * FROM details_recharge";
					//echo $year;
						$result=mysql_query($year);
				$sum=new SplFixedArray(12);
				
				for($i=1;$i<=12;$i++)
				{
					$sum[$i-1]=0;
				}
				
			while($y=mysql_fetch_object($result))
			{
				$year=$y->Date;
				$year=explode('-',$year);
				$month=$year[1];
				$years=$year[2];
				$year_split=explode(' ',$years);
				$yea=$year_split[0];
				//echo $yea;
				$id=$y->ID;
			
           	$date="Select * From details_recharge,user_details,transaction Where Email='$email' AND details_recharge.userID=user_details.user_ID AND 		 details_recharge.ID=transaction.WebsiteID  AND Status='SUCCESS' AND $yea=2014 AND details_recharge.ID='$id'";
			//echo $date;
           		$d=mysql_query($date);
				
				$r=mysql_fetch_object($d);
				
					if(mysql_num_rows($d)==0)
					{
						continue;
					}
					
					$sum[$month-1]+=$r->Amount;
					//echo $sum[$month+1];
					/*if($month==1)
					{
						$sum[$month]=$sum[$month]+$r->Amount;
					}
					if($month==2)
					{
						$sum[$month]=$sum[$month]+$r->Amount;
					}
					if($month==3)
					{
						$sum[$month]=$sum[$month]+$r->Amount;
					}
					if($month==4)
					{
						$sum4=$sum4+$r->Amount;
					}
					if($month==5)
					{
						$sum5=$sum5+$r->Amount;
					}
					if($month==6)
					{
						$sum6=$sum6+$r->Amount;
					}
					if($month==7)
					{
						$sum[7]=$sum[7]+$r->Amount;
					}
					if($month==8)
					{
						$sum[8]=$sum[8]+$r->Amount;
						
					}
					if($month==9)
					{
						$sum9=$sum9+$r->Amount;
					}
					if($month==10)
					{
						$sum10=$sum10+$r->Amount;
					}
					if($month==11)
					{
						$sum11=$sum11+$r->Amount;
					}
					if($month==12)
					{
						$sum12=$sum12+$r->Amount;
					}*/
					
					//echo $sum7;
					//echo $sum8;
			}//echo $sum9;
			
			
				?>
                
			<div class="btn_style bg">
				<h4> Transaction Graph </h4>
                </div>	
			<div class="chart">
			<canvas id="canvas" height="300" width="295" style="margin-top: 30px;"></canvas>
				<script>
						var lineChartData = {
					labels : ["January","February","March","April","May","June","July","August","September","October","November","December"],
						datasets : [
							{
								fillColor : "rgba(220,220,220,0.5)",
								strokeColor : "rgba(220,220,220,1)",
								pointColor : "rgba(220,220,220,1)",
								pointStrokeColor : "#fff",
								data : ['<?php echo $sum[0];?>','<?php echo $sum[1];?>','<?php echo $sum[2];?>','<?php echo $sum[3];?>','<?php echo $sum[4];?>','<?php echo $sum[5];?>',                                        '<?php echo $sum[6];?>','<?php echo $sum[7]; ?>','<?php echo $sum[8];?>','<?php echo $sum[9];?>','<?php echo $sum[10];?>','<?php echo $sum[11];?>']
							},
							
						]
					}
			
				var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
				
				</script>
                </div>
		  
		   </div>
        
		</div>
        </div>
		<div class="grid1_of_3 left">
			
			</div>
		</div>
		
	<div class="clear"></div>
	<div class="copy">
		<p class="link">© Created By Dhrumil Shah| Guidance by&nbsp;<a href="http://futurevisioncomputers.com/"> FutureVisionComputers</a></p>
	</div>
	</div>
</div>

</body>

</html>
<?php
}
else
{
	header("location:index.php?msg=Your session has expired.Please Re-login");
}
ob_flush();
?>

