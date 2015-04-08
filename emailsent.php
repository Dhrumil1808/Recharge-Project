S<?php
if(isset($_REQUEST['btnsubmit']))
{
	$mail = $_REQUEST['txtmail'];
 	$name = $_REQUEST['txtname'];
 	$msg = $_REQUEST['txtmsg'];
 	$sub = $_REQUEST['txtsub'];
 	$name1 = $name;
		 
 $fmsg = "<table cellpadding='10'>".
 		 "<tr> <td> <b> Email Address </td> <td> ".$mail."</b> </td>  </tr>".
		 "<tr> <td> <b> Subject  </td> <td>".$sub."</b> </td> </tr>".
		 "<tr>  <td> <b> Message </td> <td> ".$msg."</b> </td> </tr> </table>";
 //echo $fmsg;
 $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// mail('siddhuparakh@yahoo.com',$name1,$fmsg,$headers);
 mail('ghanshyam.wadhwani@gmail.com',$name1,$fmsg,$headers);
 
echo "Mail Send Sucessfuly, You will get reply soon";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

                     <form method="post" name="email" action="#">
                        <label for="author">Name:</label> <input type="text" id="txtname" name="txtname" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="txtmail" name="txtmail" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Subject:</label> <input type="text" name="txtsub" id="txtsub" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="txtmsg" name="txtmsg" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit"  id="btnsubmit" name="btnsubmit" class="submit_btn left" />
						<input type="reset"  id="reset" name="reset" class="submit_btn right" />
            	</form>
</body>
</html>