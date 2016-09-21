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
            height: 1400px;
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
            height: 60px;
            background-color:lightgray;
            line-height: 60px;
        }
        #l_connect_left_head p{
            display:inline-block;
            font-size: 20px;
            color:black;
            padding-left: 20px;
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
        #l_connect_left_a2{
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
        table{
            border: 1px solid black;
        }
        table{
            border-collapse:collapse;
            width: 100%;
            /*height: 50px;*/
        }
        tr{
            border:1px solid lightgray;
            width: 100%;
            height: 70px;
        }
        select{
            width: 100px;
            margin-right: 466px;
            margin-top: 20px;
            display: inline-block;
            font-size: 20px;
            border: 1px solid lightgray;
            float: right;
        }
        .l_connect_right_sp{
            font-size: 15px;
            padding-left: 20px;
            line-height: 70px;
        }
        #l_connect_right_xuanze{
            padding-left: 20px;
            display: inline-block;
        }
        .l_connect_right_inpt{
            width: 400px;
            height: 30px;
            float: right;
            margin-right: 160px;
            margin-top: 20px;
        }
        #l_connect_right_yanzheng{
            width: 100px;
            height: 30px;
            margin-left:100px;
        }
        #fbox{
            display: inline-block;
        }
        label{
            display:block;
            height: 30px;
        }
        #l_connect_right_btn{
            width: 150px;
            height: 40px;
            background-color:#23B7E5;
            display: block;
            margin: 0 auto;
            color: white;
            font-size: 20px;
            border: 1px solid lightgray;
        }
        #l_connect_right_yanzhengma{
            background-image: url(img/suijibg.png);
            background-size: 100% 100%;
            background-repeat: no-repeat;
            display: inline-block;
            width: 100px;
            height: 33px;
            font-size: 27px;
            text-align: center;
            color: red;
            line-height: 33px;
        }
        #l_connect_right_liuyan{
            margin-left: 100px;
            margin-top: 24px;
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
            <p>在线反馈</p>
        </div>
        <table>
            <tr>
               <td>
                   <span class="l_connect_right_sp">反馈主题</span>
                   <select>
                       <option value ="">不限</option>
                       <option value ="">索取资料</option>
                       <option value="">产品购买</option>
                       <option value="">商务合作</option>
                       <option value="">其他反馈</option>
                   </select>
               </td>
            </tr>
            
            <tr>
                <td>
                    <span class="l_connect_right_sp">姓名</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">职务</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">Email</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">联系电话</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">单位名称</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">省份</span>
                    <select>
                        <option value ="">不限</option>
                        <option value ="">北京</option>
                        <option value="">贵州</option>
                        <option value="">湖南</option>
                        <option value="">湖北</option>
                        <option value ="">河南</option>
                        <option value="">山东</option>
                        <option value="">安徽</option>
                        <option value="">江苏</option>
                        <option value ="">上海</option>
                        <option value="">浙江</option>
                        <option value="">江西</option>
                        <option value="">福建</option>
                        <option value="">广东</option>
                        <option value="">广西</option>
                        <option value ="">海南</option>
                        <option value="">云南</option>
                        <option value="">重庆</option>
                        <option value="">四川</option>
                        <option value="">西藏</option>
                        <option value="">新疆</option>
                        <option value="">宁夏</option>
                        <option value="">青海</option>
                        <option value="">甘肃</option>
                        <option value="">陕西</option>
                        <option value="">山西</option>
                        <option value="">吉林</option>
                        <option value="">辽宁</option>
                        <option value="">黑龙江</option>
                        <option value="">内蒙古</option>
                        <option value="">河北</option>
                        <option value="">天津</option>
                        <option value="">港澳台</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">详细地址</span>
                    <input type="text" class="l_connect_right_inpt">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">信息描述</span>
                    <textarea name="" id="l_connect_right_liuyan" cols="60" rows="10"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    <span id="l_connect_right_xuanze">您是怎么找到我们的</span>
                    <div id="fbox">
                        <label for="sousuo">
                            <input type="checkbox" id="sousuo">
                            搜索引擎
                        </label>

                        <label for="wangzhan">
                            <input type="checkbox" id="wangzhan">
                            网站链接
                        </label>


                        <label for="pengyou">
                            <input type="checkbox" id="pengyou">
                            朋友介绍
                        </label>

                        <label for="guanggao">
                            <input type="checkbox" id="guanggao">
                            电视广告
                        </label>

                        <label for="qita">
                            <input type="checkbox" id="qita">
                            其他方式
                        </label>
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <span class="l_connect_right_sp">验证码</span>
                    <input type="text" id="l_connect_right_yanzheng">
                    <span id="l_connect_right_yanzhengma"></span>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" id="l_connect_right_btn" value="提交信息">
                </td>
            </tr>



        </table>


    </div>
</div>

<div id="l_foot">
    <p>Powered by 北京艾硕科网络科技有限公司  ©2015-2016 </p>
</div>

<script src="../js/jquery-2.1.3.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
    var oP = document.getElementById("l_connect_right_yanzhengma");
    function rand(min,max) {
       return  Math.floor(Math.random()*(max - min + 1 )+min);
    }

        function suiji() {
            var text = "";
            var word = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

            for(var i = 0;i<4;i++){
                text += word.charAt(rand(0,word.length));
                oP.innerHTML =text;
            }

        }
        suiji();
    oP.onclick = function () {
        suiji()
    }

    function signout() {
        window.location.assign("shouye_api.php");
    }



</script>
</body>
</html>














