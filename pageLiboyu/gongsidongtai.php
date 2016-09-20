
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新闻资讯</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/xinwenzixun1.css">
    <!--    <link rel="shortcut icon" href="https://static.slightech.com/ico/favicon.png">-->
    <link href="favicon.ico" rel="shortcut icon">
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
            <a class="navbar-brand" href="#"><img src="img/Adobe%20Photoshop%20CS6.png" alt=""></a>
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
                <li class="dropdown" id="dropdown">
                    <a href="#" id="xinwenzixun1" class="dropdown-toggle" data-toggle="dropdown">新闻资讯<span class="caret"></span></a>
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
                <img src="img/Adobe%20Photoshop%20CS6.png" alt="">
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
<section class="wrap">
    <img src="img/bg.jpg" alt="" class="bg">
    <ul class="nav-left">
        <li class="header1">
            <a href="##"><p>新闻资讯</p></a>
        </li>
        <li class="gongsidongtai" style="background-color: #EFEFEF; border-left: solid 5px red">
            <a href=""><span>公司动态</span></a>
        </li>
        <li class="yejiezixun">
            <a href=""><span>业界资讯</span></a>
        </li>

    </ul>
    <section class="list-wrap">
        <ul>
            <li id="header">
                <span><a href="##">新闻资讯</a></span>
                <span>
                        <a href="" style="color: #999999">网站首页></a>
                        <a href="" style="color: #999999">新闻资讯></a>
                        <a href="" style="color: #999999">业界资讯</a>
                    </span>
            </li>
            <li class="page9">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>IBC 2015: R&S展示最新的高性能存储解决方案</span>
                </a>
                <span>2016-05-31</span>
            </li>
            <li class="page10">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>辉煌科技定增募10亿打造交通WiFi</span>
                </a>
                <span>2016-05-31</span>
            </li>
            <li class="page11">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>高等教育如何跟上大数据时代?</span>
                </a>
                <span>2016-05-31</span>
            </li>
            <li class="page12">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>两大无线充电标准联盟合并</span>
                </a>
                <span>2016-05-31</span>
            </li>
            <li class="page13">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>USB技术发明人没用专利赚过一分钱</span>
                </a>
                <span>2016-05-31</span>
            </li>
            <li class="page14">
                <a href="">
                    <i class="fa fa-caret-right"></i>
                    <span>“互联网+”落地 离不开通信行业助力</span>
                </a>
                <span>2016-05-31</span>
            </li>



        </ul>
    </section>
    <nav>
        <ul class="pagination">
            <li><a href="xinwenzixun1.php" >上一页</a></li>
            <li><a href="xinwenzixun1.php" style="background-color: #cccccc;">1</a></li>
            <li><a href="xinwenzixun2.php">下一页</a></li>
            <li><a href="#">转至第</a></li>
            <li><a href="##" style="width: 35px;height: 34px;">1</a></li>
            <li><a href="#"style="background-color: #cccccc;" >页</a></li>
        </ul>
    </nav>
</section>

<footer>
    <div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="#" target="_blank" title="企业网站管理系统">北京艾硕科网络科技有限公司&nbsp;</a> ©2015-2016&nbsp;</div>
</footer>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/jquery.pjax.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/page.js"></script>

</body>
</html>

