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
            height: 2200px;
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
            height: 508px;
            margin: 50px auto;
            border:1px solid lightgray;
            display: inline-block;
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
            height: 496px;
            margin: 50px auto;
            border:1px solid lightgray;
            display: inline-block;
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
            height: 810px;
            margin: 50px auto;
            border:1px solid lightgray;
            display: inline-block;
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

<div id="l_guanyulogo"></div>

<div id="l_connect">
    <div id="l_connect_left">
        <h1>招贤纳士</h1>
        <div id="l_connect_left_a">
            <a href="" id="l_connect_left_a1">招贤纳士</a>
            <a href="" id="l_connect_left_a2">在线应聘</a>
        </div>
    </div>

    <div id="l_connect_right">
        <div id="l_connect_left_head">
            <p>招贤纳士</p>
            <div id="l_connect_left_head_a">
                <a href="">网站首页</a><span>></span>
                <a href="Page1.php">招贤纳士</a><span>></span>
            </div>
        </div>
        <!---------------------------职位显示-------------------->
        <div id="l_connect_right_zhiwei1">
            <div class="l_connect_right_zhiwei_head">
                <a href=""><h3>IOS开发工程师</h3></a>
                <span>发布日期:2015-1-11&nbsp;&nbsp;&nbsp;工作地点:西直门&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei1_xinxi1">
                <span>【岗位职责】：</span>
                <p>
                    1.移动端音视频类app开发；
                </p>
                <p>
                    2. 配合算法人员一起优化音视频录制传输播放效果。
                </p>

            </div>
            <div id="l_connect_right_zhiwei1_xinxi2">
                <span>【任职要求】：</span>
                <p>1.两年以上IOS端实际开发经验。</p>
                <p>2.熟练掌握Object-C、IOS SDK等，熟悉C/C++。</p>
                <p>3. 熟练掌握移动平台下的网络通信、UI编程、多线程等特性。</p>
            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>
        <!---------------------------职位显示2------------------->
        <div id="l_connect_right_zhiwei2">
            <div class="l_connect_right_zhiwei_head">
                <a href=""><h3>安卓开发工程师</h3></a>
                <span>发布日期:2016-1-11&nbsp;&nbsp;&nbsp;工作地点:西直门&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei2_xinxi1">
                <span>【岗位职责】：</span>
                <p>1.负责企业级移动安全及办公套件类Android端产品；</p>
                <p>
                    2. 负责应用的UI、功能逻辑、网络通信等开发工作；
                </p>
            </div>
            <div id="l_connect_right_zhiwei2_xinxi2">
                <span>【任职要求】：</span>
                <p>1.3年以上的Android开发经验，扎实的Java、Android基础，能根据产品设计独立进行开发；</p>
                <p>2.掌握常见的数据结构和算法，有良好的编程习惯；</p>
                <p>3.熟悉ActiveSync、EMM等相关产品开发技术，有相关项目经验者优先；</p>
                <p>4.了解JNI、NDK及Android操作系统结构者优先。</p>
            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>
        <!----------------------------职位显示3------------------->
        <div id="l_connect_right_zhiwei3">
            <div class="l_connect_right_zhiwei_head">
                <a href=""><h3>HTML5开发工程师</h3></a>
                <span>发布日期:2016-1-11&nbsp;&nbsp;&nbsp;工作地点:西直门&nbsp;&nbsp;&nbsp;招聘人数：1</span>
            </div>
            <div id="l_connect_right_zhiwei3_xinxi1">
                <span>【岗位职责】：</span>
                <p>1、负责公司移动端项目混合APP前端开发；</p>
                <p>2、负责公司HTML5项目前端开发；</p>
                <p>3、负责公司微信公众号项目开发;</p>
                <p>4、跟踪最新的前端技术和标准（HTML5），持续优化前端，以提高前 端的用户体验及性能。
                </p>
            </div>
            <div id="l_connect_right_zhiwei3_xinxi2">
                <span>【任职要求】：</span>
                <p>1.精通JavaScript语言，具备开发原生JS程序能力</p>
                <p>2.熟悉HTML/HTML5/XML、CSS/CSS3等前端开发技术，2年以上开发经验</p>
                <p>3.精通基于JQuery或Dojo等JavaScript库的AJAX开发</p>
                <p>4.熟悉NodeJS、AngularJS等框架或其他前端MVC（MVVM）框架</p>
                <p>5.精通响应式页面开发，并了解在手机端动画效果优化</p>
                <p>6.了解LESS或 SASS、按需加载和模块化并能熟练 运用以及前端优化方法</p>
                <p>7.能够使用gulp 或grunt自动化构建</p>
                <P>8.具有良好的编码风格和开发习惯</P>
                <p>9.至少熟练掌握一门后端语言</p>
                <p>10.熟悉前端单元测试优先</p>
                <p>11.有微信、Android、Android、混合App等其它移动应用开发经验优先。</p>

            </div>

            <div class="l_connect_right_zhiwei_foot">
                <a href="">在线应聘</a>
                <a href="">查看详情</a>
            </div>

        </div>

    </div>

</div>

<div id="l_tiaoye">
    <a id="l_tiaoye_before" class="Page1">上一页</a>
    <a href="" id="l_tiaoye_num1">1</a>
    <a href="" id="l_tiaoye_num2">2</a>
    <span href="" id="l_tiaoye_next">下一页</span>
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