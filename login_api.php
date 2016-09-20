
<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/13
 * Time: 下午3:39
 */
session_start();
header("Content-type:text/html;charset=utf-8");

if (isset($_POST["user"])&&isset($_POST["pass"])){
    $user = $_POST["user"];
    $pass = $_POST["pass"];

    mysql_connect("localhost","root","");
    mysql_select_db("0503");
    mysql_query("set names utf8");

    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result)>0){
        $_SESSION["user"] = $user;
        $_SESSION["pass"] = $pass;
        header("Location:aboutus.php");

    }else{
        header("Location:aboutus.php");
    }

}else{
    setcookie(session_name(),session_id(),time()-10000,"/");
    header("location:aboutus.php");
}
