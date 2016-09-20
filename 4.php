<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/handf.css"/>
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .video-banner{
            position: relative;
            top:-52px;
            width:100%;
        }
        .video{
            width:100%;
        }
        .video-img{
            position: absolute;
            right: 40px;
            bottom: 120px;
        }

        .black{
            width:100%;
            height:360px;
            background-color: black;
            position: relative;
            top:-155px;
        }
        .black-box{
            width:1200px;
            height:360px;
            /*border: 1px solid white;*/
            margin: 0 auto;
            position: relative;
            top:-30px;

        }
        .black-box1{
            width:390px;
            height:232px;
            display: inline-block;
            overflow: hidden;
        }
        .black-box1>img{
            width:120%;
            height:120%;
            transition: all 1s;
        }
        .black-div{
            width:380px;
            height:60%;
            position:relative;
            top:-55%;
            color: white;
            background-color: black;
            opacity: 0.5;
            padding: 10px 0 0 10px;
            transition: all 1s;
            overflow: hidden;
        }
        .h4{
            width:100%;
            /*margin-left: 10px;*/
            margin-top: 10px;
        }
        .div1 {
            width:40px;
            height:20px;
            line-height: 20px;
            background: #FFF;
            color: #333333;
            display: inline-block;
            font-size: 10px;
            padding: 0px 4px;
            /*text-transform: uppercase;*/
            margin-top:10px;
            /*margin-left: 10px;*/
        }
        .p{
            margin-top: 20px;
            font-size: 14px;
            line-height: 17px;

        }
        .black-box2{
            margin-left: 11px;
        }
        .black-box3{

            margin-left: 11px;
        }
        .video-img2{
            display: none;
        }
        /*.nav{*/
            /*width:100%;*/
            /*height:76px;*/
            /*position: fixed;*/
            /*background-color: red;*/
            /*z-index: 2;*/
        /*}*/
        footer{
            position: relative;
            top: 0px;
            width: 100%;
            height: 220px;
            background-color: black;
        }
        .footers{
            width: 1200px;
            height: 220px;
            margin: 0 auto;
        }
        .footer_left{
            width: 150px;
            line-height: 220px;
        }
        .footer_right{
            width: 800px;
            height: 220px;
            margin: 0 auto;
            position: relative;
            top: -220px;
            left: 20px;
        }
        .footer_right a {
            position: relative;
            top: 45px;
            left: 0;
            color: #777777;
            font-size: 13px;
        }
        .footer_right span{
            position: relative;
            top: 45px;
            color: #777777;
        }
        .footer_right a:hover{
            color: red;
        }
        .p3{
            position: relative;
            top: 60px;
            color: #777777;
            line-height: 30px;
            font-size: 13px;
        }
    </style>
</head>
<body>

<nav>
    <div class="nav_con">
        <div class="logo">
            <img src="img/logo.png"/>
        </div>
        <ul class="nav_item">
            <li><a href="">首页</a></li>
            <li><a href="">关于我们</a></li>
            <li><a href="">新闻中心</a></li>
            <li><a href="">游戏中心</a></li>
            <li><a href="">加入我们</a></li>
            <li><a href="">联系我们</a></li>
            <li id="nav_btn"><span class="icon-reorder"></span></li>
        </ul>
        <div id="bar">
            <img src="img/headbar.png" alt="" />
        </div>
        <i class="cl"></i>
    </div>
</nav>
<!--        <div class="nav"></div>-->
        <div class="video-banner">
            <video src="http://www.ghqygame.com/Public/ghpc/images/game_video.webm"   autoplay="autoplay" loop="loop" class="video"> <p>您的浏览器太low了</p></video>
            <div class="video-img">
                <a href="####">
                <img src="img/paused.png" alt="" class="video-img1">
                <img src="img/play.png" alt="" class="video-img2">
                </a>
            </div>



        </div>
        <div class="black">
            <div class="black-box">
                <div class="black-box1">
                    <img src="img/ysq1.jpg" alt="">
                    <div class="black-div">
                        <div class="div1">GAME</div>
                        <h2 class="h4">有杀气童话PK推图组合推荐</h2>
                        <p class="p">有杀气童话什么组合好,在有杀气通话中,要么是推图的,要么是PK的</p>
                    </div>
                </div>
                <div class="black-box1 black-box2">
                    <img src="img/ysq2.jpg" alt="">
                    <div class="black-div">
                        <div class="div1">GAME</div>
                        <h2 class="h4">有杀气童话新手总攻略</h2>
                        <p class="p">对于刚入有杀气童话的萌新，一切还属于在探索的阶段!不少前人总结的经验就对于我们的帮助非常大!</p>
                    </div>
                </div>
                <div class="black-box1 black-box3">
                    <img src="img/ysq3.jpg" alt="">
                    <div class="black-div">
                        <div class="div1">GAME</div>
                        <h2 class="h4">有杀气童话全能型阵容搭配</h2>
                        <p class="p">在有杀气童话中伙伴阵容的搭配是非常重要的，搭配一个好的阵容可以让你事半功倍，</p>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footers">
                    <div class="footer_left">
                        <a href=""><img src="img/logo.png" alt=""></a>
                    </div>
                    <div class="footer_right">
                        <a href="">光合起源</a><span>|</span>
                        <a href="">关于我们</a><span>|</span>
                        <a href="">新闻中心</a><span>|</span>
                        <a href="">游戏中心</a><span>|</span>
                        <a href="">加入我们</a><span>|</span>
                        <a href="">联系我们</a>
                        <p class="p3">京ICP备15038749号-1  Copyright © 2014-2015 北京光合起源网络科技有限公司 All Right Reserved<br>
                            联系地址：北京市海淀区花园路甲13号院庚坊国际大厦3层307 电话：010-82257119   技术支持：星贺互联<br>
                            健康游戏忠告：抵制不良游戏 拒绝盗版游戏 注意自我保护 谨防受骗上当 适度游戏益脑 沉迷游戏伤身 合理安排时间 享受健康生活</p>
                    </div>
                </div>

            </footer>


        </div>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script>
            var a;
            $(function () {
                $(".black-box1").on("mouseover",function () {
                    a= $(this).index();
                    $(".black-box1>img").eq(a).css({
                        "width":"100%",
                        "height":"100%"
                    })

                    $(".black-div").eq(a).css({
                        "top":"-60%"
                    })

                })
            })
            var b=true;
            $(function () {
                $(".black-box1").on("mouseout",function () {
                    var a= $(this).index();
                    $(".black-box1>img").eq(a).css({
                        "width":"120%",
                        "height":"120%"
                    })

                    $(".black-div").eq(a).css({
                        "top":"-55%"
                    })

                })
            })

//            $(function () {
//                $(".video").on("mouseout",function () {
//                    $(".video-img").css({"display":"none"})
//                })
//                $(".video").on("mouseover",function () {
//                    $(".video-img").css({"display":"block"})
//                })
//            })

            $(function () {
                $(".video-img").on("click",function () {
                    b=!b;

                    if(b){
                        $(".video-img1").css({"display":"block"});
                        $(".video-img2").css({"display":"none"});

                        $('.video').get(0).play();
                    }else {
                        $(".video-img1").css({"display":"none"});
                        $(".video-img2").css({"display":"block"});

                        $('.video').get(0).pause();
                    }

                })
            })




        </script>
</body>
</html>