
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
            <a href="" style="color: #999999">公司动态</a>
        </span>
    </li>
    <ul class="nav-left">
        <li class="header1">
            <a href=""><h3>新闻资讯</h3></a>
        </li>
        <li class="gongsidongtai" style="border-left: 5px solid red;background-color: #cccccc;">
            <a href=""><span>公司动态</span></a>
        </li>
        <li class="yejiezixun" >
            <a href=""><span>业界资讯</span></a>
        </li>
    </ul>
    <ul class="nav-left2">
        <li>猜您喜欢</li>
        <li>
            <a class="page6" href="">3. 2016年蓝牙技术将实现更长通信距离、更快传输速度及Mesh联网功能</a>
            <a class="page5" href="">2. 2019年拉美FTTH用户将达1050万</a>
            <a class="page3" href="">1. 以科技创新助力发展全局</a>
            <a class="page10" href="">4. 辉煌科技定增募10亿打造交通WiFi</a>
            <a class="page12" href="">5. 两大无线充电标准联盟合并</a>
        </li>
    </ul>
    <ul class="content-wrap" style="margin-top: -500px;width: 55%">
        <li>
            <h3>“互联网+”将成为外包发展新动力</h3>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li>
            <p>从06年以来，中国出台了许多推动服务外包发展的政策措施，并在全国设立了21个服务外包示范城市。在国家和各地方政府的大力支持下，中国的服务外包产业从无到有，得到了迅速发展，领域逐步拓宽，规模不断扩大，同时，产业的国际竞争力不断加强。</p>
            <p>众所周知，09年受金融危机影响，全球服务外包的规模都有所下降，于是外包行业巨头积极思索外包行业发展新模式，2010年服务外包产业已开始走出低谷，步入回升阶段。前瞻产业研究数据显示，2010年以来IT服务支出的年均增速保持在3.5%左右，2011年全球服务支出约为8400亿美元。</p>
            <p>据悉，目前国内的外包产业仍位于产业价值链的低端，其中软件开发及测试、数据录入等领域外包服务十分匮乏。而设计到整体解决方案、研发等高端业务领域则很少或者说几乎没有涉及到。</p>
            <p>原因在于，我国的企业的专业技术能力不高，从而直接影响了业务空间及利润空间的提升，专业技术能力的提升方面，我国的企业的自主创新能力的提升还有待提高。</p>
            <p>从前产业研究数据分析，2015年二季度中国服务外包合同执行408金亿美元，同比增长65.7%。其中，承接离岸服务外包合同执行金额269.6亿美元，同比增长65.6%。由此可见，我国的服务外包市场前景还是非常广阔的。</p>
            <p>外包服务从制造业到服务业范围非常广泛，前瞻产业研究数据显示，信息技术行业外包比例最高，达55%，其次是行政管理，占47%，配送与物流22%，财务20%，人力资源19%，制造业18%，客服中心15%，销售/营销13%，房地产设施管理11%，交通9%。</p>
            <p>从数据不难看出，互联网行业在整个服务外包行业的比重将会不断上升。而其他行业的比重则不断的在降低。未来服务外包产业发展趋势已经非常明朗化，一定是紧贴全球经济发展形势。</p>
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
            <li>上一条 <a class="page6" href="" style="color: #00ADEE">2016年蓝牙技术将实现更长通信距离、更快传输速度及Mesh联网功能 </a></li>
            <li>下一条 <a class="page8" href="" style="color: #00ADEE">光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</a></li>
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

