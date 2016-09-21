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
           background-image: url("img/logoguanyu.jpg");
            background-size:100% 100%;
            background-repeat: no-repeat;
            width: 100%;
            height: 300px;
        }

        #l_connect{
            width: 1000px;
            height: 771px;
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
        #l_connect_right_wenzi{
            padding-top: 50px;
        }
         #l_connect_right_wenzi_p1{
            font-size: 15px;
             line-height: 28px;
          }

        #l_connect_right_wenzi_p2{
            font-size: 15px;
            line-height: 28px;
        }
        #l_connect_right_wenzi h3{
            font-size: 15px;
            padding-top:30px;
        }
        #l_connect_right_wenzi_p3{
            padding-top: 15px;
            font-size: 15px;
        }
        #l_connect_right_wenzi_p4{
            padding-top: 15px;
            font-size: 15px;
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
        #l_connect_left_a3:hover{
            background-color: lightgray;
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
                <p>公司简介</p>
                <div id="l_connect_left_head_a">
                    <a href="">网站首页</a><span>></span>
                    <a href="guanyuwomen.php">关于我们</a><span>></span>
                    <a href="guanyuwomen.php">公司简介</a>
                </div>
            </div>

            <div id="l_connect_right_wenzi">
                <p id="l_connect_right_wenzi_p1">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京艾硕科网络科技有限公司成立于2015年09月09<br>
                    日，是一家集大数据、互联网开发、网络运营 、互联网服务、APP定制于一体的网络科技公司。其主要专注于技术创新、寄情于移动网络IT、投身于互联网事业。拥有全新的服务理念，服务社会。北京艾硕科网络科技有限公司是一家快速成长、锐意进取的年轻网络科技公司。公司以人为本，以客户为中心，以需求为导向，以服务为宗旨；以创新、专业、求实、诚信、和谐为经营理念。创新科技，最专业的技术。现以成为整个行业技术较专业的网络公司。迅速发展成为网络科技领域的后起之秀。
                </p>
                <p id="l_connect_right_wenzi_p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;说客是北京艾硕科网络科技有限公司自主开发、自运营的一款悬赏类移动互联网产品。说客具有即时通信、语音聊天、社交匹配、网络支付等功能。注册后即可成为说客会员：主人。说客中拥有两个角色供主人选择：土豪与军师。当主人选择土豪时，即成为话题的发布者，可通过悬金悬赏话题来获得服务；当选择军师时，即成为话题的匹配者，根据自身的知识来匹配土豪的话题，为土豪服务赚取佣金。说客是高端服务交流软件，解决高端问题的，区别于其他陌生匹配社交软件。它解决人们的深层交流需求和人生困惑，通过客户群体的发展壮大，培养一高素质的语言服务人才，有趣好玩又具备高大上的现实意义。说客软件不是交友软件已做到尽可能屏蔽了个人的信息，确保了个人信息的私密性。</p>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于“为合作伙伴创造价值”</h3>
                <p id="l_connect_right_wenzi_p3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们认为客户、供应商、公司股东、公司员工等一切和自身有合作关系的单位和个人都是自己的合作伙伴，并只有通过努力为合作伙伴创造价值，才能体现自身的价值并获得发展和成功。</p>
                <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于“诚实、宽容、创新、服务”</h3>
                <p id="l_connect_right_wenzi_p4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;我们认为诚信是一切合作的基础，宽容是解决问题的前提，创新是发展事业的利器，服务是创造价值的根本。</p>

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