<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../toubu.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body,html{
            width: 100%;
        }
        #l_guanyulogo{
            background-image: url(img/logoguanyu.jpg);
            background-size:100% 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 300px;
        }

        #l_connect{
            width: 1000px;
            height: 571px;
            overflow: hidden;
            padding-top: 50px;
            margin: 0 auto;
        }
        #l_connect_left{
            width: 228px;
            height: 228px;
            border:1px solid lightgray;
            float: left;
            overflow: hidden;
        }
        #l_connect_left h1{
            padding-left: 20px;
            border-bottom:1px solid black;
            font-size: 25px;
            width: 228px;
            height: 50px;
            line-height: 50px;
        }
        #l_connect_left_a{
            padding-top: 10px;
        }
        #l_connect_left_a a{
            display: block;
            padding-left: 20px;
            text-decoration: none;
            color: black;
            width:228px;
            height: 50px;
            line-height: 50px;
        }
        #l_connect_right{
            width: 730px;
            height: 700px;
            float: right;
        }
        #l_connect_left_head{
            width: 730px;
            height: 50px;
            border-bottom: 1px solid lightgray;
            line-height: 50px;
        }
        #l_connect_left_head p{
            display:inline-block;
            font-size: 20px;
            color:black;
        }
        #l_connect_left_head_a{
            float: right;
        }
        #l_connect_left_head_a a{
            text-decoration: none;
            color: gray;
        }
        #l_connect_left_head_a span{
            color: gray;
        }


        #l_foot{
            width: 100%;
            height: 30px;
            background-color: black;
            text-align: center;
            line-height: 30px;
        }
        #l_foot p{
            color:lightgray;
            font-size: 10px;
        }
        #l_connect_left_a3{
            border-left:4px solid red;
            background-color:lightgray;
        }

        #l_connect_left_a1:hover{
            background-color: lightgray;
        }
        #l_connect_left_a2:hover{
            background-color: lightgray;
        }
        #l_connect_left_a3:hover{
            background-color: lightgray;
        }

        #l_connect_right_logo img{
            width: 50%;
        }
        #l_connect_right_lianxi{
            width: 600px;
            padding-top: 50px;
            overflow: hidden;
        }

        #l_connect_right_ppp{
            padding-top: 50px;
            line-height: 50px;
        }
        #l_connect_right_dizhi{
            float: right;
        }
        .navbar{
            margin-bottom: 0;
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
            <a class="navbar-brand" href="#"><img src="../imgd/Adobe%20Photoshop%20CS6.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">网站首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">关于我们 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="guanyuwomen.php">公司简介</a></li>
                        <li><a href="zaixianfankui.php">在线反馈</a></li>
                        <li><a href="lianxiwomen.php">联系我们</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="dropdown">
                    <a href="#" id="xinwenzixun1" class="dropdown-toggle" data-toggle="dropdown">新闻资讯<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">公司动态</a></li>
                        <li><a href="#">业界资讯</a></li>
                    </ul>
                </li>
                <li><a href="Page1.php">下载中心</a></li>
                <li><a href="#">客户案例</a></li>
                <li><a href="Page1.php">招贤纳士</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
                    echo "<li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">"."{$_SESSION['user']}"."<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\" role=\"menu\">
                    <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#myModal\">设置</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"js/page.js\">注销</a></li>
                    <li><a href=\"js/page.js\">管理</a></li>
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
                    <li><a href=\"js/page.js\">注册</a></li>
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
                <img src="../imgd/Adobe%20Photoshop%20CS6.png" alt="">
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

<div id="l_guanyulogo"></div>

<div id="l_connect">
    <div id="l_connect_left">
        <h1>关于我们</h1>
        <div id="l_connect_left_a">
            <a href="guanyuwomen.php" id="l_connect_left_a1">公司简介</a>
            <a href="zaixianfankui.php" id="l_connect_left_a2">在线反馈</a>
            <a href="lianxiwomen.php" id="l_connect_left_a3">联系我们</a>
        </div>
    </div>

    <div id="l_connect_right">
        <div id="l_connect_left_head">
            <p>联系我们</p>
            <div id="l_connect_left_head_a">
                <a href="">网站首页</a><span>></span>
                <a href="guanyuwomen.php">关于我们</a><span>></span>
                <a href="guanyuwomen.php">公司简介</a>
            </div>
        </div>

        <div id="l_connect_right_lianxi">
            <div id="l_connect_right_logo">
                <img src="img/lianxi.jpg" alt="">
            </div>

            <div id="l_connect_right_dizhi">
                <p>北京艾硕科网络科技有限公司</p>
                <p>地址：北京市西城区西环广场T3楼9B1室</p>
            </div>

            <div id="l_connect_right_ppp">
                <p>电话:010-53681239</p>
                <p>QQ:3322972483</p>
                <p>邮编：100044</p>
                <p>邮箱：ask@aishuoke.com.cn</p>
                <p>网址：www.aishuoke.com.cn</p>
            </div>



        </div>
    </div>
</div>

<div id="l_foot">
    <p>Powered by 北京艾硕科网络科技有限公司  ©2015-2016 </p>
</div>

<script src="../js/jquery-2.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    function signout() {
        window.location.assign("shouye_api.php");
    }
</script>
</body>
</html>