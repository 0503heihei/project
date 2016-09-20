
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
            <a class="page5" href="">1. 2019年拉美FTTH用户将达1050万</a>
            <a class="page6" href="">2. 2016年蓝牙技术将实现更长通信距离、更快传输速度及Mesh联网功能</a>
            <a class="page7" href="">3. “互联网+”将成为外包发展新动力</a>
            <a class="page10" href="">4. 辉煌科技定增募10亿打造交通WiFi</a>
            <a class="page12" href="">5. 两大无线充电标准联盟合并</a>
        </li>
    </ul>
    <ul class="content-wrap">
        <li>
            <h1>以科技创新助力发展全局</h1>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>23</span>
        </li>
        <li>
            <p> 科技界盛会联开，创新中国翻开新的篇章。“必须坚持走中国特色自主创新道路，面向世界科技前沿、面向经济主战场、面向国家重大需求，加快各领域科技创新，掌握全球科技竞争先机。”习近平总书记发表的重要讲话，强调了建设科技强国的出发点，对我国科技创新提出了新的要求，为下一步工作指明了方向。各地各部门要深入学习领会、切实贯彻落实，为我国可持续发展奠定坚实的科技基础，提供源源不竭的创新动力。</p>
            <p>科技是国之利器，创新是引领发展第一动力，我国科技发展的方向就是创新、创新、再创新。神舟飞天、嫦娥探月、蛟龙潜海、高铁奔腾、北斗导航……近年来，正是紧紧抓住了创新这个“牛鼻子”，中国科学技术取得了举世瞩目的成就，基础科学接连突破，工程技术硕果累累。如今，我国科技创新正由量的积累转向质的飞跃、从点的突破转向系统能力提升，科技进步贡献率已稳步升至55.1%，一系列新技术、新产品、新产业深刻影响着经济发展和社会生活的方方面面。</p>
            <p>新形势下，国家重大战略布局和经济社会发展现实对科技创新提出了更高要求。经济发展进入新常态，从要素驱动向创新驱动转变势在必行，必须把创新摆在国家发展全局的核心位置，科技创新对全面创新的引领作用将更加凸显。特别是当前，供给侧结构性改革箭在弦上，迫切需要科技创新“挑大梁”，切实提高技术供给的质量和效率。同这些要求相比，科技创新工作还有一些“短板”亟待补齐。比如，原始创新能力不足问题尚未从根本上解决，关键技术受制于人的情况依然存在，一些科技创新的体制机制障碍还未完全破除。这些都要求我们从全局的高度来认识科技创新、推进科技创新，进一步挖掘科技创新的巨大能量，进而解决好结构性改革、经济转型升级、新旧动能转换、产业结构调整等一系列重大课题。</p>
            <p>推进科技创新，人是关键因素。把队伍培养好、建设好、维护好，给予科技人才应有的精神和物质回报，把人的积极性充分调动起来，创新动力才会持久，创新成果才会不断涌现。推进科技创新，还要加强顶层设计、注意系统筹划。除了支持重大科技项目、建设重大科研设施，还要根据国家发展战略制定政策、明确任务、整体部署，有重点、有阶段、有梯次地推动各领域全面发展。推进科技创新，更要着眼发展现实，以培育经济发展新动能、促进大众创业、万众创新等为发力点，使科技创新在密切联系经济社会中具有更强的生命力与持久力。</p>
            <p>以科技创新助力发展全局，归根结底要靠改革。现有的科技成果产权制度、收益分配制度和转化机制相对滞后，科研项目管理机制、评价机制等仍显僵化，需通过进一步深化改革，破除束缚创新的桎梏，在全社会推动形成讲科学、爱科学、学科学、用科学的良好氛围，最大限度解放和激发科技作为第一生产力所蕴藏的巨大潜能，把国家和民族未来发展的主动权牢牢掌握在自己手中。</p>
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
            <li >上一条 <a class="page2" href="" style="color: #00ADEE">“互联网+”时代下的银行信息安全 </a></li>
            <li >下一条 <a class="page1" href="" style="color: #00ADEE">2016年中国贵阳数博会闭幕</a></li>
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

<footer >
    <div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="#" target="_blank" title="企业网站管理系统">北京艾硕科网络科技有限公司&nbsp;</a> ©2015-2016&nbsp;</div>
</footer>

<script src="js/jquery-1.12.1.min.js"></script>
<script src="js/jquery.pjax.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/page.js"></script>


</body>
</html>

