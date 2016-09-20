
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
            <a class="page9" href="">5.IBC 2015: R&S展示最新的高性能存储解决方案</a>
            <a class="page8" href="">4.光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</a>
            <a class="page4" href="">3.金博会闭幕 移动互联网金融成大趋势</a>
            <a class="page1" href="">1.2016年中国贵阳数博会闭幕</a>
            <a class="page2" href="">2.“互联网+”时代下的银行信息安全</a>
            <a class="page13" href="">6.USB技术发明人没用专利赚过一分钱</a>
            <a class="page14" href="">7.“互联网+”落地 离不开通信行业助力</a>
        </li>
    </ul>
    <ul class="content-wrap">
        <li>
            <h2>高等教育如何跟上大数据时代?</h2>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li style="text-indent: 0">
            <p>近年来，随着国内互联网和物联网的快速发展和广泛应用，大数据日益成为推动各个领域变革的强劲力量。从高等教育领域来看，大数据在教学、科研和管理方面引发的创新与变革日益显现。然而作为医学、法律、机械、商业等各个领域最先进的思想和研究的发源地，国内的高等院校在数据方面却并没有那么智能化。
                机构审定办公室需要根据现有学生人数追踪发展趋势，并评估未来的入学申请者。机构研究和管理人员仰赖于及时的数据针对学校的各项职能作出决策和规划，而参与大型研究资助计划的教职员面临一系列全新的数据要求。数据的种类就像今天的学生可以修读的课程一样五花八门，而学生人数的激增和全球竞争等外界因素则令数据过于繁杂的问题进一步加剧。
                由此可见，如何使高等教育跟上大数据时代的发展迫在眉睫。目前，一些学术机构开始率先尝试通过自助分析学习新的数据处理技巧，使高等教育机构提高其数据处理的智能化程度。比如上海财经大学在各个业务部门都安装了Tableau软件，帮助他们进行数据分析和可视化的转变。</p>
            <h4>允许更多人使用和处理数据</h4>
            <p>与其它行业和组织一样，高等教育机构用于处理数据的传统方法既繁琐、速度又慢。IT部门（不仅限于IT部门）能够访问数据，但其出具报告的时间却冗长至极。花费很长时间却等到那些一出来就过时的报告。
                面对这一情况，上海财大的信息化办公室极力想寻找一款数据分析和可视化工具，帮助他们进行快速、无干扰的数据分析。以前需要1-2个星期才能从数据中得出结果，并提交学校管理层。这一过程包括清理数据和使用电子表格进行分析。现在，从获得整理好的数据开始，到得出结论的时间大幅缩短至1-2天。能够更轻易地量化分析并提供各种维度的分析，以更加可视化的方式提交各种图表。</p>
            <h4>为数据加速</h4>
            <p>自助分析的核心在于加快利用数据得出结论的速度：让数据专家只需最低程度的培训或IT知识便可快速使用他们的数据。
                自助分析的另一方面是显著缩短准备的时间。这让培训和采用只需数小时就能完成，而不必再花费几个月。上海财大的数据工程师高亮在使用Tableau软件时表示Tableau极其易用，即使对那些没有多少分析知识的人，使用起来也没有多少障碍。即使不是数据科学家，也能充分利用各种功能。</p>
            <h4>实现更大灵活性和安全性</h4>
            <p>自助分析技术能够被快速采用的部分原因是因为它会增强而非替代现有的数据生态系统，可以处理所有已经存在的数据。
                尽管自助分析看似没有任何限制，但数据安全却比以往更为重要。强大的IT方案应满足三个要求：即信息的准确性、可利用性和经检验性。</p>
            <h4>通过数据可视化方便交流</h4>
            <p>就像教授经常使用视觉教具帮助学生掌握难以理解的概念一样，自助分析软件通过创建可视化程序让数据易于理解。这种可视化程序基于人类视觉处理系统相关研究成果，并结合考虑了人类天生的优势和不足。</p>
                <h4>根本目的为了促进教育</h4>
               <p> 高等院校经常因为在其教育科研工作中抱有商业目的而受到抨击，但自助分析却是私营部门向教育机构传授有用技能的一个很好的例证。原本设计用于提升客户满意度和最大化促进企业发展的工具正在为高等教育机构发挥同样的作用，同时还在服务于更为崇高的目标，即提高毕业率和最终提高整个社会的受教育程度。
                上海财大在数据分析与数据可视化的运用预示着更多高等学校将进一步加快步伐迈入大数据时代。Tableau软件易用性和采用时的低障碍性会让潜在用户试用它。将人们从数据中解放了出来，在短时间内进行复杂和多层次的分析。其强大的设计能力也将为学者们和管理人员创建美观的仪表板，提升报告的价值。</p>

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
            <li>上一条 <a class="page10" href="" style="color: #00ADEE">辉煌科技定增募10亿打造交通WiFi   </a></li>
            <li>下一条 <a class="page12" href="" style="color: #00ADEE">两大无线充电标准联盟合并</a></li>
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

