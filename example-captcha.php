<html>
  <body>
    <form action="comming_captcha.php" method="post">
    Enter Name : <input name="Enter name" type="text">
<?php
 
require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Lc9_PcSAAAAAK22Iakki6wJy9idS882ENuz-Rno";
          echo recaptcha_get_html($publickey);
		  
		  if(isset($_GET['capta']))
 		{
	 		echo $_GET['capta'];
		 }
        ?>
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>
