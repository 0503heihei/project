
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
            margin: 0 ;
            padding: 0;
        }

        .xin-box a{
            text-decoration: none;
        }
        .xin-box{
            position: relative;
            top:76px;
            width:100%;
        }
        .xin-sec1p{
            width:1000px;
            height:60px;
            margin: 0 auto;

            font-size: 18px;
            line-height: 60px;
            padding-left: 30px;
        }
        .xin-secdiv{
            width:100%;
            height:2px;
            box-shadow: 2px 2px 4px #ccc;
        }
        .xin-banner{
            width:1000px;
            height:370px;
            margin: 0 auto;
            margin-top:30px;
            overflow: hidden;
            position: relative;

        }
        .xin-banner-left{
            width:227px;
            z-index: 9999;


        }
        .div{
            display: inline-block;
            width:221px;
            height: 51px;
            background: #d7d7dc;
            margin: 0px 0px 8px 0;
            /*padding: 0px 18px 0 19px;*/
            /*border: 1px solid black;*/
            text-align: center;
            line-height: 47px;
            font-size: 14px;
            color: #333333;

        }
        .xin-banner-left-big{
            width:241px;
            height:132px;
            /*border: 1px solid red;*/
            background-image: url("img/hd_on.png");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /*margin: 0 0 10px 0;*/
            margin-bottom: 10px;
            display: none;


        }
        .xin-banner-left-big img{
            width:210px;
            height:122px;
            padding: 5px;
        }
        .xin-banner-right{
            width:777px;
            height:370px;
            position: absolute;
            top:0;
            right: 0px;
            z-index: -1;
        }
        .xin-banner-right img{
            width:100%;
            height:100%;
        }
        .xin-p{
            position: absolute;
            left:1px;
            bottom: -10px;
            background-color: black;
            opacity: 0.6;
            width:100%;
            height:45px;
            color: white;
            display: none;
            line-height: 45px;
            padding-left: 20px;
        }
        .suo-sec{
            width:1000px;
            height:42px;
            margin: 0 auto;
            margin-top:20px;
            background-color: #E5E5E5;
            padding-left: 10px;

        }

        .suo-sec h3{
            display: inline-block;
            font-size: 16px;
            background-color: white;
            height: 22px;
            padding:10px 10px 0px;
            margin-top: 10px;
            margin-right: -4px;
            background-color: #E5E5E5;
            font-weight: 100;
            color: black;
        }
        .xin-thr{
            width:1000px;
            height:154px;
            margin: 0 auto;
            margin-top: 30px;
            overflow: hidden;
            color: #7A7E6D;


        }
        .xin-thr-left{
            width:185px;
            height:114px;
            float: left;
        }

        .xin-thr-left img{
            width:100%;
            height:100%;
        }
        .xin-thr-right{
            float: left;
            padding-left: 10px;
            width:400px;
            height:113px;
            padding-top: 10px;
            color: #7A7E6D;
            /*border: 1px solid black;*/

        }
        .xin-thr-right h4{
            font-size: 13px;
            color: #646464;

        }
        .xin-thr-right p{
            font-size: 13px;
            margin-top:13px;
            line-height: 20px;
            color: #646464;
        }
        .suo-sec-h3a{
            transition: all 0.5s;
            color: #787878;
        }
        .xin-thr a h4:hover{
            color:#B91010;
        }
        .xin-thr a p:hover{
            color:#B91010;
        }
        .xin-fou{
            width:1000px;
            padding: 15px 0;
            overflow: hidden;
            height:56px;
            margin: 0 auto;
            margin-top: 10px;
            /*border: 1px solid black;*/
        }
        .xin-fiv{
            width:1200px;
            height:228px;
            margin: 0 auto;
            margin-top:20px;
            overflow: hidden;
        }
        .xin-fiv-right{
            width:445px;
            height:228px;
            float: right;
        }
        .span1{
            font-size: 24px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .span2{
            color: #A9AAAB;
            font-size: 13px;
        }
        .xin-fiv-mid{
            margin-top: 10px;
            margin-bottom: 13px;
        }
        .xin-fiv-mid-div{
            display: inline-block;
            width:50px;
            height:21px;
            background-image: url("img/kind.png");
            background-size: 100% 100%;
            text-align: center;
            line-height: 21px;
            margin-left: 16px;
            font-size: 14px;
        }
        .span3{
            margin-left: 6px;
            font-size: 14px;
            color: black;
        }
        .suo-sec h3{
            color: #787878;
        }
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
        <div class="xin-box">
            <div class="xin-sec1">
                <div class="xin-sec1p b">新闻中心</div>
                <div class="xin-secdiv"></div>
            </div>
            <div class="xin-banner">

                <div class="father">
                <div class="xin-banner-left">
                    <a href="">
                    <div class="xin-banner-left-big" style="display: block">
                        <img src="img/pic4.jpg" alt="">
                    </div>
                    <div class="div" style="display: none">周年庆! 女主播与玩家迪士尼</div>
                    </a>
                </div>

                <div class="xin-banner-left">
                    <a href="">
                    <div class="xin-banner-left-big">
                        <img src="img/pic3.jpg" alt="">
                    </div>
                    <div class="div">光合起源儿童节特别节目</div>
                    </a>
                </div>

                <div class="xin-banner-left">
                    <a href="">
                    <div class="xin-banner-left-big">
                        <img src="img/pic2.jpg" alt="">
                    </div>
                    <div class="div">复盘《有杀气童话》:一款题</div>
                    </a>
                </div>

                <div class="xin-banner-left">
                    <a href="">
                    <div class="xin-banner-left-big">
                        <img src="img/pic1.jpg" alt="">
                    </div>
                    <div class="div">会当凌云顶,一览众山小</div>
                    </a>
                </div>

                <div class="xin-banner-left">
                    <a href="">
                    <div class="xin-banner-left-big">
                        <img src="img/pic5.jpg" alt="">
                    </div>
                    <div class="div">史上最傲娇的小红帽!《有杀气</div>
                    </a>
                </div>
                </div>
                <div class="xin-banner-right">
                    <a href="">
                    <img src="img/banner1.jpg" alt="" class="xin-img">
                    <img src="img/banner2.jpg" alt="" class="xin-img">
                    <img src="img/banner3.jpg" alt="" class="xin-img">
                    <img src="img/banner4.jpg" alt="" class="xin-img">
                    <img src="img/banner5.jpg" alt="" class="xin-img">
                    <p class="xin-p" style="display: block">周年庆！ 女主播与玩家迪士尼甜蜜互动</p>
                    <p class="xin-p">光合起源儿童节特别活动</p>
                    <p class="xin-p">复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化</p>
                    <p class="xin-p">会当凌绝顶，一览众山小</p>
                    <p class="xin-p">史上最傲娇小红帽！《有杀气童话》专属冷兔表情</p>
                    </a>
                </div>

            </div>
            <div class="suo-sec">
                <a href="####"><h3 class="suo-sec-h3a" style="background-color: white;color: black">所有新闻</h3></a>
                <a href="####"><h3 class="suo-sec-h3a a">公司新闻</h3></a>
                <a href="####"><h3 class="suo-sec-h3a a">行业新闻</h3></a>
            </div>
            <div class="xin-thr">
                <a href="####">
                     <div class="xin-thr-left"><img src="img/pic1.jpg" alt="" class="img"></div>
                </a>
                <div class="xin-thr-right">
                    <a href=""><h4>有杀气童话新手攻略总汇</h4></a>
                    <a href=""><p>有杀气童话是一款非常有爱的RPG游戏，不少喜欢童话的玩家会加入到这个大家庭里，对于刚入有杀气童话的萌...</p></a>
                    <p>2015/07/28</p>
                </div>
            </div>

            <div class="xin-thr" >
                <a href="">
                    <div class="xin-thr-left"><img src="img/55b7712f4fda1.jpg" alt="" class="img"></div>
                </a>
                <div class="xin-thr-right" style="border-top: 1px solid #DCDCDC">
                    <a href="">
                         <h4>有杀气童话觉醒之路隐藏关卡 觉醒奇遇攻略</h4>
                         <p>有杀气童话伙伴怎么觉醒？在有杀气童话游戏中玩家们可以通过觉醒来大大提升玩家的战斗力，那么怎么让我们的...</p>
                    </a>
                    <p>2015/07/28</p>
                </div>
            </div>

            <div class="xin-thr" style="border-bottom: 1px solid #DCDCDC">
                <a href="">
                    <div class="xin-thr-left"><img src="img/55b76290702d3.jpg" alt="" class="img"></div>
                </a>
                <div class="xin-thr-right" style="border-top: 1px solid #DCDCDC">
                    <a href="">
                        <h4>有杀气童话觉醒之路隐藏关卡 觉醒奇遇攻略</h4>
                        <p>觉醒之路：　　觉醒之路当角色达到50级的时候就会自动开启，在秘境的最后位置，也就是子在梦幻岛的后面有...</p>
                    </a>
                    <p>2015/07/25</p>
                </div>
            </div>

            <div class="xin-fou">

            </div>
            <div class="xin-fiv">
                <div class="xin-fiv-right">
                    <div class="xin-fiv-top">
                        <img src="img/border-left.png" alt=""><span class="span1">热门资讯</span>
                        <a href="">
                            <span class="span2">/更多</span>
                        </a>

                    </div>
                    <div class="xin-fiv-mid">
                        <div class="xin-fiv-mid-div">公司</div>
                        <a href="">
                            <span class="span3">周年庆！ 女主播与玩家迪士尼甜蜜互动</span>
                        </a>

                    </div>

                    <div class="xin-fiv-mid">
                        <div class="xin-fiv-mid-div">公司</div>
                        <a href="">
                            <span class="span3">光合起源儿童节特别活动</span>
                        </a>

                    </div>

                    <div class="xin-fiv-mid">
                        <div class="xin-fiv-mid-div">行业</div>
                        <a href="">
                            <span class="span3">复盘《有杀气童话》：一款题材轻度的游戏如何实现重度化</span>
                        </a>

                    </div>

                    <div class="xin-fiv-mid">
                        <div class="xin-fiv-mid-div">公司</div>
                        <a href="">
                            <span class="span3">会当凌绝顶，一览众山小</span>
                        </a>

                    </div>

                    <div class="xin-fiv-mid">
                        <div class="xin-fiv-mid-div">公司</div>
                        <a href="">
                            <span class="span3">史上最傲娇小红帽！《有杀气童话》专属冷兔表情</span>
                        </a>

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
            var a=0;
            var timer=null;
            timer= setInterval(function () {
                a++;
                if(a>4){
                    a=0;
                }
                $(".xin-p").finish()
                $(".xin-banner-left-big").css({"display":"none"});
                $(".div").css({"display":"block"});
                $(".xin-img").css({"display":"none"})
                $(".xin-p").css({"display":"none"})

                $(".xin-p").eq(a).slideDown();
                $(".div").eq(a).css({"display":"none"})
                $(".xin-banner-left-big").eq(a).css({"display":"block"});
                $(".xin-img").eq(a).show()


            },2000)

            $(function () {
                $(".xin-banner-left").on("mouseover",function () {
                    a=$(this).index();
                    if(a==4){
                        a=-1;
                    }
                    clearInterval(timer)
                    $(".xin-p").finish()
                    $(".xin-banner-left-big").css({"display":"none"});
                    $(".div").css({"display":"block"});
                    $(".xin-img").css({"display":"none"})
                    $(".xin-p").css({"display":"none"})

                    $(".xin-p").eq(a).slideDown();
                    $(".div").eq(a).css({"display":"none"})
                    $(".xin-banner-left-big").eq(a).css({"display":"block"});
                    $(".xin-img").eq(a).show()

                })
            })

            $(function () {
                $(".xin-banner-left").on("mouseout",function () {
                    if(a==4){
                        a=-1;
                    }
                    timer= setInterval(function () {
                        a++;
                        if(a>4){
                            a=0;
                        }
                        $(".xin-p").finish()
                        $(".xin-banner-left-big").css({"display":"none"});
                        $(".div").css({"display":"block"});
                        $(".xin-img").css({"display":"none"})
                        $(".xin-p").css({"display":"none"})

                        $(".xin-p").eq(a).slideDown();
                        $(".div").eq(a).css({"display":"none"})
                        $(".xin-banner-left-big").eq(a).css({"display":"block"});
                        $(".xin-img").eq(a).show()

                    },2000)

                })
            })
            $(function () {
                $(".xin-banner-right").on("mouseover",function () {
                    clearInterval(timer)
                })
            })
            $(function () {
                $(".xin-banner-right").on("mouseout",function () {
                    if(a==4){
                        a=-1;
                    }
                    timer= setInterval(function () {
                        a++;
                        if(a>4){
                            a=0;
                        }
                        $(".xin-p").finish()
                        $(".xin-banner-left-big").css({"display":"none"});
                        $(".div").css({"display":"block"});
                        $(".xin-img").css({"display":"none"})
                        $(".xin-p").css({"display":"none"})

                        $(".xin-p").eq(a).slideDown();
                        $(".div").eq(a).css({"display":"none"})
                        $(".xin-banner-left-big").eq(a).css({"display":"block"});
                        $(".xin-img").eq(a).show()

                    },2000)
                })
            })

            $(function () {
                $(".a").on("mouseover",function () {
                    $(".a").css({"backgroundColor":"#E5E5E5","color":"#787878"})
                    $(this).css({"backgroundColor":"white","color":"black"})
                })
            })
            $(function () {
                $(".a").on("mouseout",function () {
                    $(".a").css({"backgroundColor":"#E5E5E5","color":"#787878"})

                })
            })

//            $(function () {
//                $(".b").on("click",function () {
//                    $.ajax({
//                        url:"guangheapi.php",
//                        type:"get",
//                        dataType:"json",
//                        success:function (data) {
//                         alert(data.pic)
//                            $(".img").eq(0).attr("src",data.pic)
//                    }
//                    })
//                })
//            })

        </script>
</body>
</html>