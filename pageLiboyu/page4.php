
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

<section class="wrap">
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
        <li class="gongsidongtai">
            <a href=""><span>公司动态</span></a>
        </li>
        <li class="yejiezixun" style="border-left: 5px solid red;background-color: #cccccc;">
            <a href=""><span>业界资讯</span></a>
        </li>
    </ul>
    <ul class="nav-left2">
        <li>猜您喜欢</li>
        <li>
            <a class="page1" href="">1.2016年中国贵阳数博会闭幕</a>
            <a class="page2" href="">2.“互联网+”时代下的银行信息安全</a>
            <a class="page8" href="">3.光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</a>
            <a class="page9" href="">4.IBC 2015: R&S展示最新的高性能存储解决方案</a>
            <a class="page11" href="">5.高等教育如何跟上大数据时代?</a>
            <a class="page13" href="">6.USB技术发明人没用专利赚过一分钱</a>
            <a class="page14" href="">7.“互联网+”落地 离不开通信行业助力</a>
        </li>
    </ul>
    <ul class="content-wrap">
        <li>
            <h1>金博会闭幕 移动互联网金融成大趋势</h1>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li>
            <p>有着“中国金融第一展”之称的第十一届北京国际金融博览会(以下简称“金博会”)于11月1日在北京展览馆圆满结束。本届金博会以“新常态，新金融，新功能”为主题，全面展示我国金融业及首都金融业“十二五”规划的实施成果，重点展示我国金融业改革与创新重大成果及金融服务于首都经济社会发展取得的成就。</p>
            <p>纵观历届金博会，随着客户的需求和市场的变化，每年参展的金融机构、银行、信托、基金等企业越来越多，通过金博会这个平台进行交流互动、共同进步的金融机构群体也越来越庞大，社会对金博会的关注度更是越来越高。</p>
            <p>从另外一个角度讲，虽然近几年互联网金融发展极其迅猛，金博会也越来越火热，但始终没有国家监管政策来为行业指明发展方向，互联网金融始终处于一个野蛮生长的阶段。相比往届金博会，都在以金融的改革与发展为主题，如何改革，如何发展，兜兜转转，始终处于一个不明朗的状态。</p>
            <p>7月18日，央行推出《关于促进互联网金融健康发展的指导意见》正式出台，明确提出了国家支持互联网金融的健康发展，指明了互联网金融的发展方向和基础规范，行业迎来“大洗牌”，结束了“野蛮生长”阶段。因此本届金博会现场相比往届来说，气氛异常高涨，不只金融机构竞争激烈，消费居民也纷纷加入到金融行业潮流中.</p>
            <p>据了解，今年推出的“大众创业，万众创新”成为本届金博会的最强音，并为中小微企业迎来了新的发展机遇。加上互联网金融监管政策的尘埃落定，就连传统金融也不甘示弱，开始积极创新互联网金融产品。在本届金博会现场，可以看到中国几大知名银行，包括工商银行、中国银行、中国邮政储蓄银行等，在展会现场大力推广互联网金融创新产品。而此前，央行多次降息降准，银行存款利率及货币基金等收益屡创新低，银行存款以及银行理财产品收益出现了下滑，相比较而言，互联网金融风头则越来越强劲。</p>
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
            <li>上一条 <a class="page1" href="" style="color: #00ADEE">2016年中国贵阳数博会闭幕 </a></li>
            <li>下一条 <a class="page5" href="" style="color: #00ADEE">2019年拉美FTTH用户将达1050万</a></li>
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

<footer>
    <div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="#" target="_blank" title="企业网站管理系统">北京艾硕科网络科技有限公司&nbsp;</a> ©2015-2016&nbsp;</div>
</footer>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/jquery.pjax.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/page.js"></script>


</body>
</html>

