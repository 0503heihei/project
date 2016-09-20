<?php
header("Content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/8/12
 * Time: 下午5:46
 */
session_start();
$_code=$_POST["code"];
if (strtoupper($_code)==strtoupper($_SESSION["code"])){
    echo "成功";
}else{
    echo "失败";
}

