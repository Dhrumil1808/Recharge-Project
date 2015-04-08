<?php
ob_start();
include("dbrecharge.php");
if(isset($_COOKIE['email']))
{
	 //$_POST['type']=5;
			  
	$email=$_COOKIE['email'];
if(isset($_POST['type']))
{
	
	?>
     <?php
			 	$year="SELECT * FROM details_recharge";
					//echo $year;
				$result=mysql_query($year);
				
				$sum=new SplFixedArray(12);
				for($i=0;$i<12;$i++)
				{
					$sum[$i]=0;
				}		
				
				
						while($y=mysql_fetch_object($result))
						{
							$years=$y->Date;
							$years=explode('-',$years);
							$month=$years[1];
							//echo $month;
							$yea=$years[2];
							$yea=explode(' ',$yea);
							$ye=$yea[0];
							$id=$y->ID;
							//echo $id;
							//
							//echo $_GET['msg'];
				if($_POST['type']==5)
					{
						
							if(isset($_GET['msg']))
						{
							
		$date="Select * From details_recharge,user_details,transaction Where Email='$email' AND details_recharge.userID=user_details.user_ID AND 		 details_recharge.ID=transaction.WebsiteID  AND Status='SUCCESS' AND $ye= $_GET[msg] AND details_recharge.ID='$id' ";
						}
						else
						{
		$date="Select * From details_recharge,user_details,transaction Where Email='$email' AND details_recharge.userID=user_details.user_ID AND 		  details_recharge.ID=transaction.WebsiteID  AND Status='SUCCESS' AND $ye=2014 AND details_recharge.ID='$id' ";
						}
						
				//echo $date;
				}
				
				else
				{
					if(isset($_GET['msg']))
										{
		$date="Select * From details_recharge,user_details,transaction Where Email='$email' AND details_recharge.userID=user_details.user_ID AND 		 details_recharge.ID=transaction.WebsiteID  AND Status='SUCCESS' AND Type='$_POST[type]' AND $ye= $_GET[msg] AND details_recharge.ID='$id' ";
		//echo $date;
										}
										else
										{
 $date="Select * From details_recharge,user_details,transaction Where Email='$email' AND details_recharge.userID=user_details.user_ID AND 	details_recharge.ID=transaction.WebsiteID         AND Status='SUCCESS' AND Type='$_POST[type]' AND $ye=2014 AND details_recharge.ID='$id'";
							//echo $date;      
										}
				}
						
						
				$d=mysql_query($date);
				
				
				
			$r=mysql_fetch_object($d);
					if(mysql_num_rows($d)==0)
					{
						continue;
					}
					
					$sum[$month-1]+=$r->Amount;
					//echo $sum[$month-1];		
					/*if($month==1)
					{
						$sum1=$sum1+$r->Amount;
					}
					if($month==2)
					{
						$sum2=$sum2+$r->Amount;
					}
					if($month==3)
					{
						$sum3=$sum3+$r->Amount;
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
						$sum7=$sum7+$r->Amount;
					}
					if($month==8)
					{
						$sum8=$sum8+$r->Amount;
						
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
				}
					
					//echo $sum7;
					//echo $sum8;
					//echo $sum9;
						
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
            
<?php
}

}
ob_flush();
?>