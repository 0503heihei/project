<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/8/12
 * Time: 下午4:24
 */
// 指定返回的数据类型
header("Content-type:image/png");
$image = imagecreate(500,500);
//第一次调用,会给画布背景添加颜色
imagecolorallocate($image,255,0,0);
$green = imagecolorallocate($image,0,255,0);
$blue = imagecolorallocate($image,0,0,255);

//设置画笔颜色
imagesetstyle($image,[$green,$blue]);
//设置线宽
imagesetthickness($image,"30");
//imageline($image,100,100,200,100,IMG_COLOR_STYLED);
imageline($image,200,200,300,200,$blue);

//设置笔刷
$img=imagecreatefrompng("http://www.libpng.org/pub/png/images/smile.happy.png");
imagesetbrush($image,$img);
imageline($image,100,300,400,400,IMG_COLOR_BRUSHED);

//设置圆
imagearc($image,250,250,100,100,0,360,$green);


//矩形
imagefilledrectangle($image,50,50,200,200,IMG_COLOR_BRUSHED);

//填充文字
imagestring($image,5,20,20,"helloye",$blue);
//写单个字符
imagechar($image,2,400,400,"ff",IMG_COLOR_STYLED);
//填充单个像素点
imagesetpixel($image,100,400,$green);

imagepng($image);
// 内存管理,当图片生成之后返回给前端,图片的内存就可以回收了
imagedestroy($image);