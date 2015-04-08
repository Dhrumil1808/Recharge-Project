<?
//sample php code

//this will collect data from form
$mobile = $_POST['mobile']; 
$msg = $_POST['msg'];



//check whether user enter some data or not
if(empty($mobile)){
echo"enter mobile number";
exit;
}
if(empty($msg)){
echo"enter message";
exit;
}
//end of data input checking

$msg = urlencode("$msg"); //IMPORTANT

//doing recharge now by hitting jolo api
$ch = curl_init();
$timeout = 150; // set to zero for no timeout
$myurl = "http://jolo.in/apisms/send.php?username=test&password=1234&senderid=JOLOSM&mobile=$mobile&text=$msg";
curl_setopt ($ch, CURLOPT_URL, $myurl);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
echo"$file_contents";


?>