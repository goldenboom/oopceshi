<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
//创建一个画布
$image = imagecreatetruecolor(130,45);

//为画布定义一个颜色
$bg1 = imagecolorallocate($image,rand(150,255),rand(150,255),rand(150,255));
$bg2 = imagecolorallocate($image,rand(0,150),rand(0,150),rand(0,150));
$bg3 = imagecolorallocate($image,rand(0,150),rand(0,150),rand(0,150));
$bg4 = imagecolorallocate($image,rand(0,150),rand(0,150),rand(0,150));
$bg5 = imagecolorallocate($image,rand(0,150),rand(0,150),rand(0,150));


//给这个画布填充定义的颜色
imagefill($image,0,0,$bg1);


//加一个字符
/* imagechar($image,5,50,50,"a",$bg2);
imagechar($image,5,60,50,"b",$bg2); */

//输出一个汉字
//$str = rand("a","z");

$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijkmlmnopqrstuvwxyz1234567890";
// for($i = 0; $i<4; $i++){
	
	$str1 .= $str[rand(0,62)];
	$str2 .= $str[rand(0,62)];
	$str3 .= $str[rand(0,62)];
	$str4 .= $str[rand(0,62)];
	$string="$str1"."$str2"."$str3"."$str4";
	$str = strtolower($string);
// }
$_SESSION["code"] = $str;
/* imagettftext($image,20,rand(10,20),0,23,$bg2,"simhei.ttf",$str[rand(0,35)]);
imagettftext($image,20,rand(90,180),20,23,$bg2,"simhei.ttf",$str[rand(0,35)]); */

imagettftext($image,26,rand(-10,30),rand(15,30),rand(30,40),$bg2,"simhei.ttf",$str1);
imagettftext($image,26,rand(-10,30),rand(55,60),rand(30,40),$bg3,"simhei.ttf",$str2);
imagettftext($image,26,rand(-10,30),rand(85,90),rand(30,40),$bg4,"simhei.ttf",$str3);
imagettftext($image,26,rand(-10,30),rand(115,100),rand(30,40),$bg5,"simhei.ttf",$str4);

//输出画布类型
header("content-type:image/png");

//输出图片
imagepng($image);

//销毁创建的画布
imagedestroy($image);