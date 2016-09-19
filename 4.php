<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    </style>
</head>
<body>
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