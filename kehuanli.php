<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/13
 * Time: 上午10:47
 */
session_start();
//$_SESSION["user"]="ajiao";
//echo $_SESSION["user"];
//var_dump($_COOKIE);
//setcookie(session_name(),session_id(),time()-1000,"/")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="toubu.css">
    <link rel="stylesheet" href="animate.css">
    <link href="imgd/Adobe%20Photoshop%20CS6.png" rel="shortcut icon">
    <title>北京艾硕科网络科技有限公司</title>
    <style>
        .dcenter{
            width: 100%;
            height: 300px;
            background-image: url('imgd/1342430358.jpg');
            background-size: 100% 100%;
            background-repeat: no-repeat;
        }
        .dsection{
            width: 90%;
            margin: 50px auto;
        }
        .ds1{
            width: 100%;
        }
        .ds1 span:nth-child(1){
            font-size: 18px;
        }
        .ds1 span:nth-child(2){
            float: right;
        }
        .ds2{
            margin-top:20px;
            width: 100%;
            height:220px;
            border-top: 1px solid #DDDDDD ;
        }
        .ds2 img{
            float: left;
            margin-top:20px;
        }
        .ds2 span{
            float: left;
            margin-left: 20px;
            margin-top:20px;
            font-size: 18px;
        }
        .ds3 img{
            float: left;
            margin-top:20px;
        }
        .ds3 span{
            float: left;
            margin-left: 20px;
            margin-top:20px;
            font-size: 18px;
        }
        .ds3{
            margin-top:20px;
            border-bottom: 1px solid #DDDDDD;
            width: 100%;
            height:240px;
            border-top: 1px solid #DDDDDD ;
        }
        .ds1 a{
            text-decoration: none;
            color: black;
        }
        .ds2 a{
            text-decoration: none;
            color: black;
        }
        .ds3 a{
            text-decoration: none;
            color: black;
        }
        .fenye{
            width: 100%;
            height: 100px;
            text-align: center;
        }
        .fenye a{
            text-decoration: none;
            color: black;
        }
        .ye1{
            display: inline-block;
            width: 60px;
            height: 30px;
            background-color:#F0F0F0;
            text-align: center;
            line-height: 30px;
        }
        .ye2{
            display: inline-block;
            line-height: 30px;
            text-align: center;
            width: 30px;
            height: 30px;
            background-color: #F0F0F0;
        }
        .ye3{
            display: inline-block;
            line-height: 30px;
            text-align: center;
            width: 50px;
            height: 30px;
            background-color: #F0F0F0;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="imgd/Adobe%20Photoshop%20CS6.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">网站首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">关于我们 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">公司简介</a></li>
                        <li><a href="#">在线反馈</a></li>
                        <li><a href="#">联系我们</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻资讯<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">公司动态</a></li>
                        <li><a href="#">业界资讯</a></li>
                    </ul>
                </li>
                <li><a href="#">下载中心</a></li>
                <li><a href="#">客户案例</a></li>
                <li><a href="#">招贤纳士</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
                    echo "<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">"."{$_SESSION['user']}"."<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">设置</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"javascript:signout()\">注销</a></li>
                        <li><a href=\"javascript:signout()\">管理</a></li>
                    </ul>
                </li>";
                }else{
                    echo "<li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">登录 <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">登录</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"##\">忘记密码</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"javascript:signout()\">注册</a></li>
                    </ul>
                </li>";
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="imgd/Adobe%20Photoshop%20CS6.png" alt="">
            </div>
            <div class="modal-body">

                <form class="form-horizontal col-sm-offset-2" role="form" method="post" action="shouye_api.php">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">邮箱</label>
                        <div class="col-sm-6 ">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="user">
                        </div>
                    </div>
                    <div class="form-group col-sm-offset-2">
                        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-6 ">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-info">登录</button>
                            <button type="submit" class="btn btn-info">重置</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<div class="dcenter">
</div>
<div class="dsection">
    <div class="ds1">
        <span>客户案例</span>
        <span><a href="##">网站首页</a>><a href="##">客户案例</a></span>
    </div>
    <div class="ds2">
        <img src="imgd/thumb%20(1).jpeg" alt="">
        <span><a href="##">劳务实名制系统</a></span>
    </div>
    <div class="ds2">
        <img src="imgd/thumb%20(2).jpeg" alt="">
        <span>
            <a href="##">互联网消息分发中心</a>
            <p style="font-size: 14px;color: #989890;">相关描述文字,相关描述文字,相关描述文字</p>
        </span>

    </div>
    <div class="ds2">
        <img src="imgd/thumb.jpeg" alt="">
        <span ><a href="##">地震数据省级共享平台</a></span>
    </div>
    <div class="ds3">
        <img src="imgd/thumb%20(3).jpeg" alt="">
        <span><a href="##">中国青年旅行社ERP系统</a><p style="font-size: 14px;color: #989890;">相关描述文字,相关描述文字,相关描述文字</p></span>
    </div>
</div>
<div class="fenye">
    <span class="ye1"><a href="##">上一页</a></span>
    <span class="ye2"><a href="##">1</a></span>
    <span class="ye1"><a href="##">下一页</a></span>
    <span>转至第</span>
    <input class="ye3" value="1"></input>
    <span><a href="##">页</a></span>
</div>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="swiper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function signout() {
        window.location.assign("kehuanli_api.php");
    }
</script>
</body>
</html>