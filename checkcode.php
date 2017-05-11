<?php
  //教材pp=238页例子
   header("content-type:text/html;charset=utf-8"); 
   header("content-type:image/jpeg");
   $image = imagecreate(100,30);
   $bgcoloer = imagecolorallocate($image,250,180,180);
   $fontcolor = imagecolorallocate($image,30,30,30); //r,g,b都相等，其实就是灰色
   $font = "STCAIYUN.TTF";//字体
   $rand = '';               //先赋值rand初值为空，教材没这一句，这样是不正确的。
   for($a = 0;$a<4;$a++){
	   $rand .=dechex(rand(0,15));   //dechex是把10进制转换成16进制。
   }
   $string = $rand;
   session_start();
   $_SESSION['yz']= $string;  
   imagettftext($image,15,20,20,29,$fontcolor,$font,$string);
   imagejpeg($image);
   imagedestroy($image);
?>