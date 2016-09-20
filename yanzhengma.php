<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/8/12
 * Time: 下午5:01
 */
header("Content-type:image/png");

session_start();
//先删除session里的内容
//session_destroy();
unset($_SESSION["code"]);
$image = imagecreate(100,40);

imagecolorallocate($image,213,241,253);

$str=[];
for($i = 0; $i < 4; $i++){
    switch (rand(0,2)){
        case 0:
            //数字
            $str[$i]=chr(rand(45,57));
            break;
        case 1:
            //大写字母
            $str[$i]=chr(rand(65,90));
            break;
        case 2:
            //小写字母
            $str[$i]=chr(rand(97,122));
            break;

    }
}
$code = implode("",$str);
$_SESSION["code"]=$code;

for($i = 0; $i < 4; $i++){
    $randColor=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
    imagechar($image,5,100/4*$i,10,$str[$i],$randColor);
}


//输出png格式的图像
imagepng($image);
