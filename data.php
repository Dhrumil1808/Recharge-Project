<?php
include("dbrecharge.php");
header('Content-Type:application/json');

$data_points=array();
$result="SELECT * FROM details_recharge";
$row=mysql_query($result);
while($r=mysql_fetch_object($row))
				{
					$da=$r->Date;
					$da=explode('-',$da);
					$day=$da[0];
					//echo $day;
					$month=$da[1];
					//echo $month;
					$year=$da[2];
									
				}
					
					

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>