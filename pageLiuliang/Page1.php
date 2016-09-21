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
            height: 2635px;
            overflow: hidden;
            padding-top: 50px;
            margin: 0 auto;
        }
        #l_connect_left{
            width: 228px;
            height: 250px;
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

        #l_connect_right_wenzi h3{
            font-size: 15px;
            padding-top:30px;
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
        #l_connect_left_a1{
            border-left:4px solid red;
            background-color:lightgray;
        }
        #l_connect_left_a1:hover{
            background-color: lightgray;
        }
        #l_connect_left_a2:hover{
            background-color: lightgray;
        }

        .navbar{
            margin-bottom: 0;
        }

 /**********************职位信息***************/
        #l_connect_right_zhiwei1{
            width: 700px;
            height: 678px;
            margin: 50px auto;
            border:1px solid lightgray;
        }

        .l_connect_right_zhiwei_head{
            width: 690px;
            height: 80px;
            margin-left:5px;
            border-bottom: 1px solid lightgray;
        }
        .l_connect_right_zhiwei_head a{
            text-decoration: none;
        }
        .l_connect_right_zhiwei_head h3{
            padding-left: 20px;
            padding-top: 0;
        }
        .l_connect_right_zhiwei_head span{
            display:block;
            font-size: 10px;
            color:gray;
            padding-left: 20px;
            padding-top: 20px;
        }
        #l_connect_right_zhiwei1_xinxi1 span{
            padding: 20px;
            display:block;
        }
        #l_connect_right_zhiwei1_xinxi1 p{
            font-size: 14px;
            color:black;
            padding-left: 20px;
            line-height: 25px;
        }
        #l_connect_right_zhiwei1_xinxi2{
            margin-top: 60px;
        }
        #l_connect_right_zhiwei1_xinxi2 span{
            padding: 20px;
            display: block;
        }
        #l_connect_right_zhiwei1_xinxi2 p{
            font-size: 14px;
            color: black;
            padding-left: 20px;
            line-height: 25px;
        }
        .l_connect_right_zhiwei_foot{
            width: 690px;
            height: 50px;
            margin-top: 20px;
            margin-left:5px;
            border-top:1px solid lightgray;
        }
        .l_connect_right_zhiwei_foot a{
            line-height: 50px;
            margin-left: 10px;
            text-decoration: none;
            color: cornflowerblue;
        }

/***********************职位信息2*****************/
        #l_connect_right_zhiwei2{
            width: 700px;
            height:850px;
            margin: 50px auto;
            border:1px solid lightgray;
        }

        .l_connect_right_zhiwei_head{
            width: 690px;
            height: 80px;
            margin-left:5px;
            border-bottom: 1px solid lightgray;
        }
        .l_connect_right_zhiwei_head a{
            text-decoration: none;
        }
        .l_connect_right_zhiwei_head h3{
            padding-left: 20px;
            padding-top:0;
        }
        .l_connect_right_zhiwei_head span{
            display:block;
            font-size: 10px;
            color:gray;
            padding-left: 20px;
            padding-top: 20px;
        }
        #l_connect_right_zhiwei2_xinxi1 span{
            padding: 20px;
            display:block;
        }
        #l_connect_right_zhiwei2_xinxi1 p{
            font-size: 14px;
            color:black;
            padding-left: 20px;
            line-height: 25px;
        }
        #l_connect_right_zhiwei2_xinxi2{
            /*margin-top: 60px;*/
        }
        #l_connect_right_zhiwei2_xinxi2 span{
            padding: 20px;
            display: block;
        }
        #l_connect_right_zhiwei2_xinxi2 p{
            font-size: 14px;
            color: black;
            padding-left: 20px;
            line-height: 25px;
        }
        .l_connect_right_zhiwei_foot{
            width: 690px;
            height: 50px;
            margin-top: 20px;
            margin-left:5px;
            border-top:1px solid lightgray;
        }
        .l_connect_right_zhiwei_foot a{
            line-height: 50px;
            margin-left: 10px;
            text-decoration: none;
            color: cornflowerblue;
        }

/**************************职位显示3************************/
        #l_connect_right_zhiwei3{
            width: 700px;
            height: 800px;
            display:inline-block;
            margin: 50px auto;
            border:1px solid lightgray;
        }

        .l_connect_right_zhiwei_head{
            width: 690px;
            height: 80px;
            margin-left:5px;
            border-bottom: 1px solid lightgray;
        }
        .l_connect_right_zhiwei_head a{
            text-decoration: none;
        }
        .l_connect_right_zhiwei_head h3{
            padding-left: 20px;
            padding-top: 20px;
        }
        .l_connect_right_zhiwei_head span{
            display:block;
            font-size: 10px;
            color:gray;
            padding-left: 20px;
            padding-top: 20px;
        }
        #l_connect_right_zhiwei3_xinxi1 span{
            padding: 20px;
            display:block;
        }
        #l_connect_right_zhiwei3_xinxi1 p{
            font-size: 14px;
            color:black;
            padding-left: 20px;
            line-height: 25px;
        }
        #l_connect_right_zhiwei3_xinxi2{
            /*margin-top: 60px;*/
        }
        #l_connect_right_zhiwei3_xinxi2 span{
            padding: 20px;
            display: block;
        }
        #l_connect_right_zhiwei3_xinxi2 p{
            font-size: 14px;
            color: black;
            padding-left: 20px;
            line-height: 25px;
        }
        .l_connect_right_zhiwei_foot{
            width: 690px;
            height: 50px;
            margin-top: 20px;
            margin-left:5px;
            border-top:1px solid lightgray;
        }
        .l_connect_right_zhiwei_foot a{
            line-height: 50px;
            margin-left: 10px;
            text-decoration: none;
            color: cornflowerblue;
        }

/**************************跳页**************************/
        #l_tiaoye{
            width: 470px;
            height: 50px;
            display: block;
            margin-left:500px;
            padding-bottom: 40px;
        }
        #l_tiaoye a{
            text-decoration: none;
            color:darkgray;
        }
        #l_tiaoye_before{
            width: 70px;
            height: 30px;
            border: 1px solid lightgray;
            color:darkgray;
            display:inline-block;
            text-align: center;
            line-height: 30px;
        }
        #l_tiaoye_next{
            width: 70px;
            height: 30px;
            border: 1px solid lightgray;
            color:darkgray;
            display:inline-block;
            line-height: 30px;
            text-align: center;
        }
        #l_tiaoye_num1,#l_tiaoye_num2,#l_tiaoye_num3,#l_tiaoye_num4{
            width: 30px;
            height: 30px;
            display:inline-block;
            border: 1px solid lightgray;
            text-align: center;
            line-height: 30px;
        }
        #l_tiaoye_zhuanzhi{
            width: 70px;
            height: 30px;
            border: 1px solid lightgray;
            color:darkgray;
            display: inline-block;
            text-align: center;
            line-height: 30px;
        }
        #l_tiaoye_text{
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 1px solid lightgray;
        }
        #l_tiaoye_btn{
            display: inline-block;
            width: 50px;
            height: 30px;
            border: 1px solid lightgray;
            background: none;
            color: darkgray;
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
                <li><a href="#">下载中心</a></li>
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
        <h1>招贤纳士</h1>
        <div id="l_connect_left_a">
            <a href="Page1.php" id="l_connect_left_a1">招贤纳士</a>
            <a href="#" id="l_connect_left_a2">在线应聘</a>
        </div>
    </div>

    <div id="l_connect_right">
        <div id="l_connect_left_head">
            <p>招贤纳士</p>
            <div id="l_connect_left_head_a">
                <a href="../shouye.php">网站首页</a><span>></span>
                <a href="Page1.php">招贤纳士</a><span>></span>
            </div>
        </div>
<!---------------------------职位显示-------------------->
        <div id="l_connect_right_zhiwei1">
            <div class="l_connect_right_zhiwei_head">
                <a href="jiagoushi.html"><h3>架构工程师</h3></a>
                <span>发布日期:2015-11-27&nbsp;&nbsp;&nbsp;工作地点:北京市西环广场&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei1_xinxi1">
                <span>【岗位职责】：</span>
                <p>
                    1、有负责移动社交产品后台服务的核心架构设计和实施的经验；能够进行移动社交产品设计和结构优化调整；
                </p>
                <p>
                    2、根据公司要求负责系统及相关产品需求分析及架构设计；
                </p>
                <p>
                    3、对产品的整体系统架构负责，对产品的系统安全性设计负责，开发及相关设计文档编写；
                </p>
                <p>
                    4、制定设计及实现规范，指导设计、实现及部署工作；
                </p>
                <p>
                    5、负责对软件开发团队的技术指导；
                </p>
                <p>
                    6、同时需完成服务端开发具体工作。
                </p>
            </div>
            <div id="l_connect_right_zhiwei1_xinxi2">
                <span>【任职要求】：</span>
                <p>1、五年以上整体架构和研发经验，具备千万级高并发架构经验</p>
                <p>2、精通Java和Java底层架构，熟悉常用的开源实现，熟悉队列技术；</p>
                <p>3、精通Memcached、Redis、MongoDB和MYSQL等技术，了解大数据技术；
                </p>
            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>
<!---------------------------职位显示2------------------->
        <div id="l_connect_right_zhiwei2">
            <div class="l_connect_right_zhiwei_head">
                <a href=""><h3>项目经理</h3></a>
                <span>发布日期:2016-1-11&nbsp;&nbsp;&nbsp;工作地点:西直门&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei2_xinxi1">
                <span>【岗位职责】：</span>
                <p>
                    1、负责多个项目全生命期的项目管理，包括立项、制定可实施的项目管理计划、执行、监督、收尾完工等
                </p>
                <p>
                    2、指导和管理项目执行，对整体、范围、时间、质量等九大领域进行管理，对项目状态进行管理，定期提交各种报告；
                </p>
                <p>
                    3、监督和控制项目，对项目的各阶段进行严格监控，灵活进行资源调配，把控变更，定期提交控制报告；
                </p>
                <p>
                    4、负责协调和解决项目中出现的技术和管理问题，保证项目的正常进行，确保项目计划按时完成；
                </p>
                <p>
                    5、配合客户服务部门进行项目的售后业务实施与管理，处理与各部门的协作等事宜；；
                </p>
                <p>
                    6、负责团队人员的任务目标分解、人员培训、绩效考核；
                </p>
                <p>
                    7、协助项目管理的审核；
                </p>
                <p>
                    8、协助进行项目管理培训。
                </p>
            </div>
            <div id="l_connect_right_zhiwei2_xinxi2">
                <span>【任职要求】：</span>
                <p>1、大学本科以上学历，通信或计算机及相关专业优先考虑；</p>
                <p>2、5年以上系统集成企业项目实施工作经验，有过最少8人以上团队管理经验</p>
                <p>3、熟悉系统集成技术，具有方案设计讲解、客户交流等方面经验；</p>
                <p>
                    4、熟悉项目管理运作模式，对项目管理有较深的理解，有丰富的项目管理经验，并能与客户进行良好的项目沟通；
                </p>
                <p>
                    5、有高度的责任心、可承受工作压力，为人诚实敬业，具备在压力环境下按时完成工作的能力，工作认真负责，具有良好的团队协作精神；
                </p>
                <p>
                    6、较强的团队领导能力、组织能力、判断与决策能力、沟通协调能力、计划与执行能力。
                </p>

            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>
<!----------------------------职位显示3------------------->
        <div id="l_connect_right_zhiwei3">
            <div class="l_connect_right_zhiwei_head">
                <a href=""><h3>产品经理</h3></a>
                <span>发布日期:2016-1-11&nbsp;&nbsp;&nbsp;工作地点:西直门&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei3_xinxi1">
                <span>【岗位职责】：</span>
                <p>
                    1.负责公司移动端产品工作；
                </p>
                <p>
                    2.以公司目标为导向，结合市场竞争与业务发展情况，调研并制定产品需求；
                </p>
                <p>
                    3.关注产品各项常规数据与指标，通过统计和分析验证构想并指导产品改进方向，根据上级需要提出细粒度数据挖掘需求；
                </p>
                <p>
                    4.根据项目需要输出高质量的市场需求文档，产品需求文档，产品原型
                </p>
                <p>
                    5.协调内外部资源，对接技术团队，设计团队以及运营市场团队，推进产品项目全流程高效运转；
                </p>
                <p>
                    6.收集用户反馈，提升用户满意度。
                </p>
            </div>
            <div id="l_connect_right_zhiwei3_xinxi2">
                <span>【任职要求】：</span>
                <p>1.至少三年以上移动产品相关经验，桌面类、社交类、电商类产品尤佳；</p>
                <p>2.具备较强的逻辑思维能与用户体验细节把控能力，具有较好的用户同理心；</p>
                <p>3.熟悉Android、iOS、微信服务平台特性，设计规范及其异同点；</p>
                <p>
                    4.深度移动互联网用户，产品控，熟悉国内外各大榜单焦点产品，完美主义者，追求 体验极致；
                </p>
                <p>
                    5.具备良好的沟通协调以及强有力的业务推动能力；
                </p>
                <p>
                    6.熟悉各类办公软件与产品工具，能够输出高质量的产品文档与原型；
                </p>
                <p>
                    7.具备较好的文字功底，能够输出高质量的调研报告并设计符合目标用户偏好的产品文案；
                </p>
                <P>
                    8.具备敏锐的数据直觉，卓越的项目管理能力以及快速学习能力
                </P>

            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>

    </div>

</div>

<div id="l_tiaoye">
    <span id="l_tiaoye_before" class="Page1">上一页</span>
    <a href="" id="l_tiaoye_num1">1</a>
    <a href="" id="l_tiaoye_num2">2</a>
    <a href="" id="l_tiaoye_next" class="Page2">下一页</a>
    <span id="l_tiaoye_zhuanzhi">转至第</span>
    <input type="text" id="l_tiaoye_text">
    <input type="button" id="l_tiaoye_btn" value="页">
</div>

<div id="l_foot">
    <p>Powered by 北京艾硕科网络科技有限公司  ©2015-2016 </p>
</div>

<script src="../js/jquery-2.1.3.js"></script>
<script src="../js/jquery.pjax.js"></script>
<script src="../js/change.js"></script>

<script src="../js/bootstrap.min.js"></script>
<script>
    function signout() {
        window.location.assign("shouye_api.php");
    }
</script>

</body>
</html>