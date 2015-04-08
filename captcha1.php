<?php
session_start();
$height=50;
$width=500;

$image_p=imagecreatetruecolor($width,$height);

$background_color=imagecolorallocate($image_p,255,255,255);
imagefilledrectangle($image_p,0,0,200,50,$background_color);
$line_color=imagecolorallocate($image,64,64,64);
imagejpeg($image_p,null,80);
for($i=0;$i<10;$i++)
{
	imageline($image_p,0,rand(0,50),200,rand(0,50),$line_color);
}
$pixel_color=imagecolorallocate($image_p,0,0,255);
for($i=0;$i<100;$i++)
{
	imagesetpixel($image_p,rand(0,200),rand(0,50),$pixel_color);
}

$letters='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
$length=strlen($letters);
$letter=$letters[rand(0,$length-1)];
$text_color=imagecolorallocate($image_p,255,255,255);

for($i=0;$i<6;$i++)
{
	$letter=$letters[rand(0,$length-1)];
	$imagestring($image_p,5,5+($i*30), 20,$letter,$text_color);
	$word.=$letter;
	}

$_SESSION['captcha']=$word;


$font_size=25;
imagestring($image_p,$font_size,5,5,$text,$white);

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