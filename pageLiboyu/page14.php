
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

            <a class="page13" href="">7.USB技术发明人没用专利赚过一分钱</a>
            <a class="page11" href="">6.高等教育如何跟上大数据时代?</a>
            <a class="page9" href="">5.IBC 2015: R&S展示最新的高性能存储解决方案</a>
            <a class="page8" href="">4.光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</a>
            <a class="page4" href="">3.金博会闭幕 移动互联网金融成大趋势</a>
            <a class="page1" href="">1.2016年中国贵阳数博会闭幕</a>
            <a class="page2" href="">2.“互联网+”时代下的银行信息安全</a>

        </li>
    </ul>
    <ul class="content-wrap">
        <li>
            <h2>“互联网+”落地 离不开通信行业助力</h2>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li style="text-indent: 0">
            <p>对于“互联网+”如何落地对这个话题，我之前在文章中已经说过多次。但是有一个非常需要注意的点在里面，那就是企业探索再多的互联网转型之道，在整体联网环境没能解决的情况下，各种“互联网+”解决方案的具体实施与操作都无限趋近于零。尤其在农村电商、新农村建设等领域，互联网的基础建设非常重要，已经成为“互联网+”能否顺利落地农村的首要因素。</p>
            <p>这种大环境上的互联网因素缺失，一方面与国家的整体发展战略有关，另一方面也与资本、企业以及各地政府的推动有关。但是没有各地政府的推动与助力，仅凭淘宝、京东等企业的“下乡刷墙”的面子工程是得不到实际性进展的。因此，“互联网+”的基础环境建设并不是一个人或者几个人的事，而是从官方到民间所有相关单位都有义务协同推进这个过程。具体应该怎么做?近期中国电信与广东省政府的战略合作就是一个很好的例子。</p>
            <h4 style="border-left: 5px solid #6751A4 ;background-color: #F5F5F5;">“互联网+”与传统企业融合须先具备互联网环境</h4>
            <p>10月23日下午，广东省政府与中国电信集团在广州签署的是《加快“十三五”信息化建设战略合作框架协议》。显然，广东省政府认识到了信息化的重要性，更认识到了要想实现全民信息化，就必须先做互联网环境的基础建设。一方面企业的商业模式要在传统企业领域验证，离不开互联网的支持，另一方面要想进一步实施“互联网+”与企业的融合，都不能缺少联网基因。“互联网+”要与传统企业乃至政府管理相融合，必须先具备互联网环境才行。</p>
            <p>从“互联网+”行动计划的提出到现在，已经有了一段时间，各地政府及企业在推动其发展的过程当中，都认识到了互联网基础建设的重要性。要想推动传统企业通过互联网转型，没有配套的联网环境是决然不行的。而要做好互联网环境建设，也必须要寻找一个得力的合作伙伴来具体操作。</p>
            <h4 style="border-left: 5px solid #6751A4 ;background-color: #F5F5F5;">“互联网+”通信行业与政府双管齐下才能进一步推动互联网基础建设</h4>
            <p>当前，全国各地都伴随着“互联网+”的行动计划以及“全民创业万众创新”的执行方案在有条不紊的进行中。可以说，各地都进入了一个以互联网为基础的经济发展的新常态。广东省长朱小丹认为，广东正处在全面深化改革、扩大对外开放、加快转型升级的关键阶段。因此，“加快信息化建设尤其是推进互联网与传统产业、新兴产业、民生事业、公共服务等融合发展，已经成为推动经济平稳健康发展、促进产业结构优化升级、激发市场活力和社会潜力、保障改善民生服务的必然要求。”
            </p>
            <p>不只是广东，在经济发展进入新常态的今天，全国各地区都有这个需求。如果各地政府都能够与三家通信企业签订战略合作，对于进一步完善信息基础设施网络、实施创新驱动发展战略、加快经济社会转型升级都将起到重要推动作用，同时也能进一步拓展通信企业在各地的发展空间。这不是简单的1+1>2的逻辑，而是1+1之后，可以影响及带动更多的1+1，以此来推动全国的互联网基础建设工作。因此，广东政府与中国电信的这次战略合作，是应该推而广之的。
            </p> <h4 style="border-left: 5px solid #6751A4 ;background-color: #F5F5F5;">“互联网+”通信行业与政府双管齐下才能进一步推动互联网基础建设</h4>
            <p>对于通信行业而言，无论与哪个地方政府战略合作，都能与其共同推进创新驱动发展战略、“互联网+”行动计划、“中国制造2025”以及“一带一路”战略，并能进一步推动各地的济转型升级和社会事业发展。同时，共同推进高速互联网基础设施建设，提升“互联网+”在现代农业、智能制造、商贸流通、政务服务、惠民服务、创业创新等领域的应用水平，这也应该是各地政府与通信行业的己任。是以，“互联网+”的落地与执行，是离不开通信行业助力的</p>
            <p>不得不提的是，这其中的难点在于不可能实现全国各地同时普及互联网，因为区域的经济环境、用户需求以及地理位置等决定了基础建设的难易程度与先后。这就要求互联网环境建设与地区发展有机结合，就如中国的经济建设一样，让一部分地区先实现互联网环境普及，发展起来以后再带动及辐射周边区域的信息化建设。从这个角度上，通信行业的三大运营商更应该主动出击，毕竟他们身上肩负着推动社会进步的使命。</p>
            <p>末尾，再多说几句。个人认为中国南北方的区域的差别，体现在人性上就在于北方重格局而南方更务实。政府也是如此，在其他各地还在联系百度、阿里、腾讯等各企业探讨交流智慧城市、互联网+、工业4.0等的解决方案的时候，广东政府则是率先联系中国电信投入到互联网基础环境的建设中，这是非常值得学习与推崇的。
                事实上，互联网基础环境的建设就如“要想富，先修路”这句80年代典型口号中的那条路。只有先将路理顺了，才能有更多的经济贸易往来走进来走出去，不是吗?</p>

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
            <li>上一条 <a class="page13" href="" style="color: #00ADEE">USB技术发明人没用专利赚过一分钱 </a></li>
            <li>下一条 <a class="page14" href="" style="color: #00ADEE">没有了</a></li>
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

