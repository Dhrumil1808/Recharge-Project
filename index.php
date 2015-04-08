<?php
ob_start();
	include("dbrecharge.php");
	if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash']))
	{
		$email=mysql_real_escape_string($_GET['email']);
		$hash=mysql_real_escape_string($_GET['hash']);
		$search="SELECT Email,hash,active from user_details Where Email='$email' and hash='$hash' and active=0";
		//echo $search;
		$sel=mysql_query($search);
		$match=mysql_num_rows($sel);
		//echo $match;
		
		if(mysql_num_rows($sel)!=0)
		{
			$update="UPDATE user_details SET active=1 Where Email='$email' and hash ='$hash' and active=0";
			echo $update;
			mysql_query($update);
			header("location:index.php?msg=Account has been activated");
			
		}
		if(mysql_num_rows($sel)==0)
		{
			header("location:index.php?msg=Cant activate your account.Please Try again");
		}
		

	}
	if(isset($_POST['submit']))
	{
	$email=trim($_REQUEST['box']);
	$password=trim($_REQUEST['password']);
	$select="SELECT * FROM `user_details` WHERE Email='$email' AND Password='$password' AND active='1'";
	//echo $select;
	$result=mysql_query($select);
	if(mysql_num_rows($result)==1)
	{
		$r=mysql_fetch_object($result);
		setcookie("email",trim($r->Email),time()+900);	
		date_default_timezone_set("Asia/Kolkata");
		$date=date("Y-m-d h:i:sa");
		$i="INSERT INTO login_info(ID,Login_ID, Login) VALUES ('NULL','$r->user_ID','$date')";
		//echo $i;
		mysql_query($i);
		header("location:index_transparent.php?msg='$email'");
	}
	else
	 {
		header("location:index.php?msg=Invalid Username or Password");
         }
		 }
		 if(isset($_COOKIE['email']))
		 {
			 header("location:index_transparent.php");
		 }
		 else
		 {
	  	?>
<!DOCTYPE HTML>
<html>
<head>
<title>Online Recharge</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start slider -->
<link rel="stylesheet" type="text/css" href="css/slider.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
        <script type="text/javascript">
	$(document).ready(function(){
	
		//alert("first");
	$(".mcd-menu li").click(function () {
			
			//alert(this.value);
			
			//alert("first im ");
	
			//alert("hi");
	$("#operator").html('<img src="images/loading37.gif"/>');
			$.ajax({
				type: "POST",
				data: "data="+ this.value,
				url: "ajaxs.php",
				cursor:"pointer",
				success: function(msg){
					$("#operator").html(msg)
				}
			});
			
		
		//alert("first");
		
		});
	
	
	
	
	});
</script>

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
			url:"ajax4.php?msg=4",
			success:function(msg) {
				$("#content").html(msg)
			}
		});
	});


});
</script>
 
</head>
<body>
<div class="wrap">
	<div class="main"><!-- start main -->
	  <div class="grid1_of_1"><!-- start grid1_of_1 -->
		<div class="menu"><!-- start menu -->
			<ul class="mcd-menu">
       	<li value="1">
					
						<i class="icon1"></i>
						<strong>Prepaid</strong>
					
				</li>
				<li value="2">
						<i class="icon2"></i>
						<strong>Postpaid</strong>
					
				</li>
				<li value="3">
					
						<i class="icon3"></i>
						<strong>DTH</strong>
									</li>
				<li value="4">
					
						<i class="icon4"></i>
						<strong> Data Card</strong>
					
				</li>
		
				
		</ul>
		</div><!-- end menu -->	
		<div class="grids_of_2" id="plans"><!-- start grids_of_2 -->	
				<div class="btn_style bg1">
				<h4>Plans and Schemes</h4>
			</div>
				<div class="grid_user">
 	 

     
    <?php
	
	$s="Select * From operator_details Where Type='1'";
	$rel=mysql_query($s);
	?>
   	<div id="operator"> 
    <label>
    <select name="operator" id="operators">
    <option value="0"> Prepaid operators </option>
   	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <option value="<?php echo $r->Operator_ID; ?>" style="background-image:url(upload/airtel1.jpg)"> <?php  echo $r->Name;?> </option>
  	<?php
	}
	
	?>
    </select>
    </label>
    </div>
 <br/> 			
 	
        <?php
     	$sel="SELECT TYPE FROM operator_details WHERE Operator_ID='4'";
		//echo $sel;
		$s=mysql_query($sel);
		$r=mysql_fetch_object($s);
		$t=$r->TYPE;
		//echo $_POST['operators'];
		$sel="SELECT * from schemes Where Type=$t";
		//echo $sel;
		$sa=mysql_query($sel);
		?>
 	
    			<div id="schemes">
				<label>
                <select name="schemes" id="scheme">
           <option value="0"> Combo </option>
	<?php
	 while($ra=mysql_fetch_object($sa))
	{
	?>
	<option value="<?php echo $ra->Scheme_TYPE_ID; ?>"> <?php echo $ra->Scheme_Name;?> </option>
<?php
	}
	//header("location:ajax4.php?msg=$t");
	?>
	</select>
	</label>	
	</div>					
      <div id="content">	
			<table class="scroll" border="2px">
	<tr>
    <td> Amount  </td>
    <td>&nbsp;  </td>
    <td> Talktime </td>
    <td>&nbsp;    </td>
    <td> Validity </td>
    <td>&nbsp;     </td>
	<td> Description </td>
       
    </tr>
		
	<?php
    //echo "hi";
	$joint="Select Amount,Talktime,Validity,Description,operator_details.Operator_ID From plan_details,schemes,operator_details
	Where schemes.Scheme_TYPE_ID=plan_details.SchemeID  and plan_details.Operator_ID=operator_details.Operator_ID and operator_details.Operator_ID='4'";
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
	
?>
</table> 
	</div>
    
		</div> 
			<div class="clear"></div>
		
		</div><!-- end grids_of_2 -->	
		</div><!-- end grid1_of_1 -->
	
    <div class="grid1_of_2"><!-- start grid1_of_2 -->
		<?php
		if(isset($_REQUEST['msg']))
		{
			?>
            <div class="red"> <?php echo $_GET['msg'];?>
			</div>
    <?php
		}
		?>
     	<div class="grid_text"> 
		<div class="span_of_text">
					<h4>Login to your account</h4>
				</div>
				<div class="login_form">
					<form method="post"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="login">
						<span>Email</span>
						<input type="text" class="text" name="box" placheholder="email">
						<span>Password</span>
						<input type="password" class="text" name="password" placeholder="password">
						
           			   
			<input type="submit" value="Sign in" name="submit" />
							<div class="clear"></div>
						
					         <div class="forgot"> <a href="forgotpassword.php">Forgot Password?  </a> </div>           
		<div class="next">
                               Dont have an Account? <a href="Sign_up.php"> Click here to Create </a>
    </div>
    </form>              				   
     </div>
        </div>
        
        </div><!-- end grid1_of_2 -->
      
      <div class="clear"></div>
      <div class="clear"> </div>
      
      <div class="span_of_2"><!-- start span_of_2 -->
			<div class="span_of_list">
             <div class="btn_style bg1">
				<h4>Recharge Partners</h4>
				</div>
            <pre>
            
            </pre>
					<div class="span1_of_1">
                   <ul>
                   <li> <h2 class="a"> <b>  MOBILE PREPAID  </b></h2> </li>
                   <hr>   
                    <?php
	
	$s="Select * From operator_details Where Type='1'";
	$rel=mysql_query($s);
	?>
   	
	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <li value="<?php echo $r->Operator_ID; ?>"> <img src="<?php echo $r->Image;?>"> &nbsp; <?php  echo $r->Name;?> </li>
  	<?php
	}
	
	?>
    </ul>
                  
                     </div>
				
                    <div class="span1_of_2">
					<ul> 
                    <li> <h2 class="a"> MOBILE POSTPAID </h2></li>
                    <hr>
                                     <?php
	
	$s="Select * From operator_details Where Type='2'";
	$rel=mysql_query($s);
	?>
   	
	<?php
	while($r=mysql_fetch_object($rel))
	{
		//echo $r->Image;
	?>
   
    <li value="<?php echo $r->Operator_ID; ?>" > <img src="<?php echo $r->Image;?>"> &nbsp; <?php  echo $r->Name;?> </li>
	<?php
	}
	
	?>
                   
                    </ul>	
                    <pre>
                    
                    </pre>
					<ul> 
                    <li> <h2 class="a"> DTH (TV) </h2> </li>
                       <hr>        
                                      <?php
	
	$s="Select * From operator_details Where Type='3'";
	$rel=mysql_query($s);
	?>
   	
	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <li value="<?php echo $r->Operator_ID; ?>"> <img src="<?php echo $r->Image;?>"> &nbsp; <?php  echo $r->Name;?> </li>
  	<?php
	}
	
	?>
                    </ul>	
                    <pre>
                   
                       </pre>
					<ul> 
                    <li> <h2 class="a"> PREPAID DATACARD </h2> </li>
                       <hr>        
                                      <?php
	
	$s="Select * From operator_details Where Type='4'";
	$rel=mysql_query($s);
	?>
   	
	<?php
	while($r=mysql_fetch_object($rel))
	{
	?>
   
    <li value="<?php echo $r->Operator_ID; ?>"> <img src="<?php echo $r->Image;?>"> &nbsp; <?php  echo $r->Name;?> </li>
  	<?php
	}
	
	?>
                    </ul>	
					</div>	 
					<div class="clear"></div>
				</div>	
            
			</div><!-- end span_of_2 -->
			<div class="clear"></div>
		</div><!-- end spans_of_2 -->
     
		        		<div class="menu">
						<ul class="span_img">
					<a href="index.php"> <li> <strong> Home </strong> </li> </a>
                     <a href="about.html"><li> <strong> About us </strong>  </li> </a>
                  <a href="termsandconditions.html"> <li> <strong> T & C </strong> </li> </a> 
                    <a href="FAQ.html"><li> <strong> FAQ  </strong></li> </a>
                   <a href="privacypolicy.html"> <li> <strong> Privacy policy  </strong> </li></a>
                     <a href="security.html"><li> <strong> Security policy  </strong>  </li></a>
                   	</ul>
					</div>
        <div class="copy">
            <p class="link"><span>© Created By Dhrumil Shah | Guidance by&nbsp;<a href="http://futurevisioncomputers.com/"> FutureVisionComputers</a></span></p>
		</div>
	</div><!-- end main -->
</div>
</body>
</html>
<?php
ob_flush();
}
		 
?>
