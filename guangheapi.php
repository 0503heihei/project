<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/19
 * Time: 下午3:00
 */
$arr=["http://www.ghqygame.com/Public/ghimg/55b76290702d3.jpg","
有杀气童话觉醒之路隐藏关卡 觉醒奇遇攻略","觉醒之路：　　觉醒之路当角色达到50级的时候就会自动开启，在秘境的最后位置，也就是子在梦幻岛的后面有...","2015/07/25"];
mysql_connect("127.0.0.1","root","");
mysql_select_db("0503");
mysql_query("set names utf8");
$sql="INSERT INTO guanghe (id,pic,title,p,unm) VALUES (NULL ,'{$arr[0]}','{$arr[1]}','{$arr[2]}','{$arr[3]}')";
$result=mysql_query($sql);

if (mysql_insert_id()>0){
    $arr1=Array("pic"=>$arr[0],"");
    echo json_encode($arr1);
}else{
    echo '{"err":1,"msg":"失败"}';
}