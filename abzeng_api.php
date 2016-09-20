<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/8/16
 * Time: 上午11:06
 */

//api: weibo_api.php?type=xx&content=xx&id=xx
//请求方式:get
//参数:type , 类型(add,ding,cai)
//content,添加数据的具体内容
//id,顶或踩所在行的id
//返回值:{"err":0,"msg":"失败原因","time":14xxx}

mysql_connect("localhost","root","");
mysql_select_db("0503");
mysql_query("set names utf8");

$type = $_GET["type"];


switch($type){
    //添加内容
    case "add";
        $things = $_GET["things"];
        $time = $_GET["time"];
        $sql = "INSERT INTO licheng (id,time,things) VALUES (NULL,'{$time}','{$things}')";
        mysql_query($sql);
        if(mysql_insert_id()>0){
            $arr = array("id"=>mysql_insert_id(),"err"=>0,"msg"=>"成功","time"=>$time);
            echo json_encode($arr);

        }
        break;

    case "shan":
        $id = $_GET["id"];
        $lastId = $_GET["lastId"];
        $sql = "SELECT * FROM licheng WHERE id={$id}";
        $result = mysql_query($sql);
        $row = mysql_fetch_assoc($result);
        $sql = "DELETE FROM licheng WHERE id={$id}";
        mysql_query($sql);
        if(mysql_affected_rows()>0){
            $sql = "SELECT * FROM licheng WHERE id<{$lastId} ORDER BY id DESC LIMIT 1";
            $result = mysql_query($sql);
            $row = mysql_fetch_assoc($result);
            $arr = ["err"=>0,"msg"=>"删除成功","result"=>$row];
            echo json_encode($arr);
        }else{
            echo '{"err":1,"msg":"删除失败"}';
        }
        break;


}