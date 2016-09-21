<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/20
 * Time: 上午9:22
 */
session_start();
header("Content-type:text/html;charset=utf-8");
if(isset($_POST["user"])&&isset($_POST["pass"])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    mysql_connect("localhost","root","");
    mysql_select_db("0503");
    mysql_query("set names utf8");
    //看数据库中有没有数据
    $sql = "SELECT * FROM user WHERE username ='{$user}' AND password = '{$pass}'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result)>0){
        //用户已经存在,可以登录
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        //form重定向
        //header("Location:index.php");
        $arr = ["err"=>0, "msg"=>"用户已经存在,可以登录", "user"=>$user, "pass"=>$pass];
        echo json_encode($arr);
    } else{
        //用户密码错误
        echo '{"err":1, "msg":"手机号或者密码格式不对!"}';
    }
}
else{
    setcookie(session_name(),session_id(),time()-10000000,"/");
    header("Location:index.php");
}