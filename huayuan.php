<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/8/12
 * Time: 下午3:10
 */

session_start();
header("Content-type:text/html;charset=utf-8");
header("Content-type: image/png");
$width =200;
$height = 100;

$im = @imagecreatetruecolor($width,$height) or die('创建图片失败');
$backgroung_color = @imagecolorallocate($im,255,255,255);
//    imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));

imagefill($im,0,0,$backgroung_color);
$border_color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
imagerectangle($im,0,0,$width-1,$height-1,$border_color);
$text_color = imagecolorallocate($im,rand(50,180),rand(50,180),rand(50,180));
$fontsize = 16;
$code =rand(0,9);
imagestring($im,$fontsize,rand(20,$width/2),rand($height/2,$height-20),$code,$text_color);
$_SESSION['mycode'] = $code;
imagepng($im);
imagedestroy($im);


//$im=imagecreate(670,500);
//$white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);
//$g = imagecolorallocate($im, 0x00, 0x00, 0x00);
//define("PII",M_PI/180);
//function drawLeaf($g,$x,$y,$L,$a){
//
//    global $im;
//    $B = 50;
//    $C =9;
//    $s1 = 2;
//    $s2 = 3 ;
//    $s3 = 1.2;
//    if($L > $s1)
//    {
//        $x2 = $x + $L * cos($a * PII);
//        $y2 = $y + $L * sin($a * PII);
//        $x2R = $x2 + $L / $s2 * cos(($a + $B) * PII);
//        $y2R = $y2 + $L / $s2 * sin(($a + $B) * PII);
//        $x2L = $x2 +$L / $s2 * cos(($a - $B) * PII);
//        $y2L = $y2 + $L / $s2 * sin(($a - $B) * PII);
//
//        $x1 = $x + $L / $s2 * cos($a * PII);
//        $y1 = $y + $L / $s2 * sin($a * PII);
//        $x1L = $x1 + $L / $s2 * cos(($a - $B) * PII);
//        $y1L = $y1 + $L / $s2 * sin(($a - $B) * PII);
//        $x1R = $x1 + $L / $s2 * cos(($a + $B) * PII);
//        $y1R = $y1 + $L / $s2 * sin(($a + $B) * PII);
//
//        ImageLine($im,(int)$x,  (int)$y,  (int)$x2,  (int)$y2,  $g);
//        ImageLine($im,(int)$x2, (int)$y2, (int)$x2R, (int)$y2R, $g);
//        ImageLine($im,(int)$x2, (int)$y2, (int)$x2L, (int)$y2L, $g);
//        ImageLine($im,(int)$x1, (int)$y1, (int)$x1L, (int)$y1L, $g);
//        ImageLine($im,(int)$x1, (int)$y1, (int)$x1R, (int)$y1R, $g);
//
//        drawLeaf($g, $x2,  $y2,  $L / $s3, $a + $C);
//        drawLeaf($g, $x2R, $y2R, $L / $s2, $a + $B);
//        drawLeaf($g, $x2L, $y2L, $L / $s2, $a - $B);
//        drawLeaf($g, $x1L, $y1L, $L / $s2, $a - $B);
//        drawLeaf($g, $x1R, $y1R, $L / $s2, $a + $B);
//    }
//}
//drawLeaf($g,300,500,100,270);
//header("Content-type: image/png");
//imagepng($im);
