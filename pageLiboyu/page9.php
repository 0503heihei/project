
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
    <link rel="stylesheet" href="css/page1.css">
    <!--    <link rel="shortcut icon" href="https://static.slightech.com/ico/favicon.png">-->
    <link href="favicon.ico" rel="shortcut icon">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .dwarp{
            width: 100%;
            height: 50px;
            background-color: #F7F8FA;
            border-bottom: 1px solid #E7E8ED ;
        }
        .dheader{
            width: 100%;
        }
        .navbar{
            /*height:100px;*/
            background-color: white;
            border: none;
        }
        .navbar-nav>li>a{
            padding-top: 30px;
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

<section class="wrap" >
    <img src="img/bg.jpg" alt="" class="bg">
    <li id="header">
        <span >
            <a href="" style="color: #999999">网站首页></a>
            <a href="" style="color: #999999">新闻资讯></a>
            <a href="" style="color: #999999">业界资讯</a>
        </span>
    </li>
    <ul class="nav-left">
        <li class="header1">
            <a href=""><h3>新闻资讯</h3></a>
        </li>
        <li class="gongsidongtai" >
            <a href=""><span>公司动态</span></a>
        </li>
        <li class="yejiezixun" style="border-left: 5px solid red;background-color: #cccccc;">
            <a href=""><span>业界资讯</span></a>
        </li>
    </ul>
    <ul class="nav-left2">
        <li>猜您喜欢</li>
        <li>
            <a class="page8" href="">4.光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</a>
            <a class="page4" href="">3.金博会闭幕 移动互联网金融成大趋势</a>
            <a class="page1" href="">1.2016年中国贵阳数博会闭幕</a>
            <a class="page2" href="">2.“互联网+”时代下的银行信息安全</a>
            <a class="page11" href="">5.高等教育如何跟上大数据时代?</a>
            <a class="page13" href="">6.USB技术发明人没用专利赚过一分钱</a>
            <a class="page14" href="">7.“互联网+”落地 离不开通信行业助力</a>
        </li>
    </ul>
    <ul class="content-wrap" >
        <li>
            <h2>IBC 2015: R&S展示最新的高性能存储解决方案</h2>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li>
            <p>今年的IBC展会，罗德与施瓦茨公司重点展示了DVS产品线针对广播电视工作流程的最新存储解决方案。新的存储解决方案除了提供更高的适用性外，还提供更高的数据吞吐带宽，这将使现有的广播电视和影视后期公司客户大为受益。</p>
            <p>2015年9月3日，汉诺威 — 在7.E25展位上，IBC展会的参观者们在R&S公司的展台见证了DVS产品线针对广播电视工作流程而推出的具有极高可靠性的高性能存储解决方案。针对广播电视行业对存储系统稳定性和性能的极高重视，R&S公司DVS产品线重新定义了旗下的存储解决方案。新的解决方案最主要的是有以下两点的突破：第一，存储系统支持配置冗余数据存储选项；第二，整个存储系统将保护倒换时间降为最低，完全满足广播电视运营商7x24小时的运营需求。</p>
            <p>通过推出更高可靠性和更强性能的存储解决方案，R&S DVS公司旨在进一步增强公司产品线在广播电视运营商中的部署，特别是针对演播室的节目采集、播出等应用。新的存储解决方案由于极大的降低了保护倒换时间，从而确保了在广播电视系统中不停机，无时延的运营需求。此外新的存储系统中的实时存储部分，还支持不停机的进行系统的扩容和增加。</p>
            <p>R&S公司DVS产品线负责存储系统的产品经理Sina-Nastassija Gaus说：“我们一直专注于针对市场变化和用户需求为用户提供更好的解决方案。对于广播电视和后期制作行业，存储系统需要具备更高的可靠性和更强的性能，而且数据的安全性又极其的重要，针对这种工作流程，DVS将是您的最佳选择。”</p>
        </li>
        <ul class="icons">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ul id="nav-bottom">
            <li>上一条 <a class="page8" href="" style="color: #00ADEE">光通信的下一站？ 欢迎参加2015光通信技术和发展论坛   </a></li>
            <li>下一条 <a class="page10" href="" style="color: #00ADEE">辉煌科技定增募10亿打造交通WiFi</a></li>
        </ul>
    </ul>
    <ul class="share-logo">
        <li>
            <img src="img/shareWeixin.png" alt="" class="shareWeixin">
        </li>
    </ul>
    <ul class="share-many">
        <p style="background-color: #cccccc;">分享到</p>
        <ul class="sm-left">
            <li><a href="">一键分享</a></li>
            <li><a href="">新浪微博</a></li>
            <li><a href="">微信</a></li>
            <li><a href="">腾讯微博</a></li>
            <li><a href="">开心网</a></li>
            <li><a href="">百度贴吧</a></li>
            <li><a href="">百度新首页</a></li>
            <li><a href="">和讯贴吧</a></li>
        </ul>
        <ul class="sm-right">
            <li><a href="">一键分享</a></li>
            <li><a href="">新浪微博</a></li>
            <li><a href="">微信</a></li>
            <li><a href="">腾讯微博</a></li>
            <li><a href="">开心网</a></li>
            <li><a href="">百度贴吧</a></li>
            <li><a href="">百度新首页</a></li>
            <li><a href="">和讯贴吧</a></li>
        </ul>
        <li class="more"><a href="">更多...</a></li>

    </ul>
</section>

<footer style="margin-top: 150px">
    <div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="#" target="_blank" title="企业网站管理系统">北京艾硕科网络科技有限公司&nbsp;</a> ©2015-2016&nbsp;</div>
</footer>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/jquery.pjax.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/page.js"></script>

</body>
</html>

