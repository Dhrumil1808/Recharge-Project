 <?php
  require_once('recaptchalib.php');
$privatekey = "6Lc9_PcSAAAAADw5ODBWnPzrgbvoZpw-bgWhnkYd";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
	  header("location:example-captcha.php?capta=incorrect capta code");
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
		 
		 
  } else {
	  echo "hurray capta work sucess fully";
    // Your code here to handle a successful verification
  }
?>
