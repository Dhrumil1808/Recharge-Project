<?php
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
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/portfolio.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Wadhwani Group</title>
<!-- InstanceEndEditable -->
<link rel="icon" href="images/logo1.png" type="image" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
		<style>
		
			.ribbon {
				display:inline-block;
				margin: 3% 0% 0% 38%;
			}

			.ribbon:after, .ribbon:before {
				margin-top:0.3em;
				content: "";
				float:left;
				border:1.5em solid #fff;
			}

			.ribbon:after {
				border-right-color:transparent;
			}

			.ribbon:before {
				border-left-color:transparent;
			}

			.ribbon a:link, .ribbon a:visited { 
				color:#000;
				text-decoration:none;
			    float:left;
			    height:3.5em;
				overflow:hidden;
				font-weight:bold;
			}

			.ribbon span {
				background:#fff;
				display:inline-block;
				line-height:3em;
				padding:0 1em;
				margin-top:0.5em;
				position:relative;

				-webkit-transition: background-color 0.2s, margin-top 0.2s;  /* Saf3.2+, Chrome */
				-moz-transition: background-color 0.2s, margin-top 0.2s;  /* FF4+ */
				-ms-transition: background-color 0.2s, margin-top 0.2s;  /* IE10 */
				-o-transition: background-color 0.2s, margin-top 0.2s;  /* Opera 10.5+ */
				transition: background-color 0.2s, margin-top 0.2s;
			}

			.ribbon a:hover span {
				background:#CFA83A;
				margin-top:0;
			}

			.ribbon span:before {
				content: "";
				position:absolute;
				top:3em;
				left:0;
				border-right:0.5em solid #9B8651;
				border-bottom:0.5em solid #fff;
			}

			.ribbon span:after {
				content: "";
				position:absolute;
				top:3em;
				right:0;
				border-left:0.5em solid #9B8651;
				border-bottom:0.5em solid #fff;
			}
		</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    }); 
    
</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="templatemo_header_wrapper">
  <div id="templatemo_header">
    	<div id="site_title"><a href="http://www.wadhwanigroup.net/">Wadhwani Group</a></div>
      
       		<div class='ribbon'>
            
				<a href='index.html'><span>Home</span></a>
				<a href='aboutus.html'><span>About Us</span></a>
                
				<a href='portfolio.html'><span>Project</span></a>
				<a href='contact.php'><span>Contact</span></a>
		</div>
        <div class="clear"></div>
    <div >
           
        <!-- END of templatemo_slider -->
      </div> 
        <!-- END of templatemo_slider_wrapper -->
    </div> <!-- END of header -->
<!-- InstanceBeginEditable name="Content" -->
<div id="templatemo_main">
<h1>Contact </h1>
    <h4>Send us a message now!</h4>
    <p>&nbsp;</p>
	<div class="half left">
    	 <div id="contact_form">
                    <form method="post" name="contact" action="#">
                        
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
        </div>   
    </div>
        
    <div class="half right">
    	<h4><strong>Wadhwani Groups</strong></h4>
   	  <p>New Patel Socity,<br />
            Nr Sindhi Colony,<br />
            B/h. Parsi Hospital Navsari.<br /><br />
				
		    <strong>Phone:</strong><br />
   	  Mr. Karan : +91 989-856-6066 <br />
            
  	<div class="cleaner h40"> </div>
        <div style="margin:-11px 0px 0px 0px">
        
        <iframe width="465" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=R+B+Patel+Technical+Institute,+Chhapra,+Navsari,+Gujarat&amp;aq=0&amp;oq=Navsari,rb&amp;sll=20.943365,72.935851&amp;sspn=0.011363,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;ll=20.945148,72.92937&amp;spn=0.007014,0.00912&amp;z=16&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=R+B+Patel+Technical+Institute,+Chhapra,+Navsari,+Gujarat&amp;aq=0&amp;oq=Navsari,rb&amp;sll=20.943365,72.935851&amp;sspn=0.011363,0.021136&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;ll=20.945148,72.92937&amp;spn=0.007014,0.00912&amp;z=16" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        
        </div>
    </div>  
  <div class="clear h40"></div>
</div>
<!-- InstanceEndEditable --></div> <!-- END of header wrapper --><!-- END of main -->
<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<div class="col one_fourth">
           <h4>Project</h4>
			<br />
          <ul class="footer_gallery">
           	  <li><a href="londonbungalows.html"  ><img src="images/landon-bungalows-SMALL.jpg" title="London Bungalows" alt="Landon Bungalows" /></a></li>
                <li><a href="Anjan.html"  ><img src="images/anjan-SMALL.jpg" title="Anjan Salakha Appartment" alt="Anjan" /></a></li>
                
               <br /> <br />
                <li><a href="londonpalace.html" ><img src="images/landon-palace-SMALL.jpg" title="Londan Palace" alt="Landon Palace" /></a></li>
                <li><a href="shalibhadraresidency.html"><img src="images/shalibhadra%20residancy-SMALL.jpg" title="Shalibhadra Residancy" alt="Shalibhadra Residancy" /></a></li>
                
                  <br /> <br />
               
            </ul>
            <div class="clear"></div>
           
      </div>
      
      <div class="col one_fourth">
          <h4>Ongoing Project</h4>
            <ul class="no_bullet" >
             <li>  </li>
             <li>
               <span class="header"><a href="londonbungalows.html"> 1. London Bungalows</a></span></li>
             
              <li>
                <span class="header"><a href="londonpalace.html">2. London Palace</a></span></li>
                <li>
                <span class="header"><a href="shalibhadraresidency2.html">3. Shalibhadra Residency - 2</a></span></li>
               
                 
            </ul>
        </div>
      
    	<div class="col one_fourth">
          <h4>Completed Project</h4>
            <ul class="no_bullet" >
             <li>  </li>
             <li>
               <span class="header"><a href="Anjan.html"> 1. Anjan Salakha Appartment</a></span></li>
                <li>
                <span class="header"><a href="shalibhadraresidency.html">2. Shalibhadra Residency</a></span></li>
           
                
            </ul>
      </div>
        <div class="col one_fourth no_margin_right">
        <center>
          <span class="header">
          <a href="https://www.facebook.com/pages/Wadhwani-Group/200671183444248" target="_blank">
          <img src="images/img-fb.png" title="Facebook" /></a>
          
          <a href="https://twitter.com/WadhwaniGroup" target="_blank">
          <img src="images/img-tw.png"  title="Twitter" /></a>
          
          <a href="http://www.linkedin.com/profile/view?id=288333735&trk=nav_responsive_tab_profile" target="_blank">
          <img src="images/linkedin.png"  title="Linkedin" width="24" height="24"  /></a>
          
        <!--  <a href="https://plus.google.com/u/0/101346884068132811269/posts?hl=en&tab=XX" target="_blank">
          <img src="../images/g+42.png" width="24" height="24" /></a> -->
          
          </span>
              </center>
          <p><center>Copyright © 2013-2014 @ </center> </p>
          
          
          <a href="http://www.wadhwanigroup.net/" target="_blank"><center><font color="#000000"><b>WADHWANI GROUPS</b></font></center></a> <br /><center>
            <p>| Developed By |          </p>
          </center>
          </p>
          <a href="https://www.facebook.com/pages/Green-Weaver-Solution/110576522392881" target="_blank"><center><p><font color="#000000"><b>Green Weaver Solution</b></font></p></center></a>
                  
                 
          <a href="http://www.futurevisioncomputers.com/" target="_blank">
          <center><p><font color="#000000"><b>Future Vision Computers</b></font></p></center></a>
        </div>
        <div class="clear"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</body>
<a href="#" class="scrollup">Scroll</a>
<!-- InstanceEnd --></html>