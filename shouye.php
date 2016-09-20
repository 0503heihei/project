<?php
/**
 * Created by PhpStorm.
 * User: dllo
 * Date: 16/9/13
 * Time: 上午10:47
 */
session_start();
//$_SESSION["user"]="ajiao";
//echo $_SESSION["user"];
//var_dump($_COOKIE);
//setcookie(session_name(),session_id(),time()-1000,"/")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="swiper.css">
    <link rel="stylesheet" href="toubu.css">
    <link rel="stylesheet" href="animate.css">
    <link href="imgd/Adobe%20Photoshop%20CS6.png" rel="shortcut icon">
    <title>北京艾硕科网络科技有限公司</title>
    <style>

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
            <a class="navbar-brand" href="#"><img src="imgd/Adobe%20Photoshop%20CS6.png" alt=""></a>
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻资讯<span class="caret"></span></a>
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
                        <li><a href=\"javascript:signout()\">注销</a></li>
                        <li><a href=\"javascript:signout()\">管理</a></li>
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
                        <li><a href=\"javascript:signout()\">注册</a></li>
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
                <img src="imgd/Adobe%20Photoshop%20CS6.png" alt="">
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
<div class="gundong">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="imgd/1422257708.jpg" alt=""></div>
            <div class="swiper-slide"><img src="imgd/1422258064.jpg" alt=""></div>
            <div class="swiper-slide"><img src="imgd/1422258242.jpg" alt=""></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>
<div class="dzi">
    <h3>关于我们</h3>
</div>
<div class="dmiddle">
    <div class="mlz">
        <div class="dml">
            <h4>关于"为合作伙伴创造价值"</h4>
            <p>北京艾硕科网络科技有限公司认为客户、供应商、公司股东、公司员工等一切和自身有合作关系单位各个人都是自己的合作伙伴,并只有通过努力为合作伙伴创造价值,才能体现自身的价值并获得发展和成功</p>
        </div>
        <div class="dml2">
            <h4>关于"诚实、宽容、创新、服务"</h4>
            <p>北京艾硕科网络科技有限公司认为诚信是一切合作的基础,宽容是解决问题的前提,创新是发展事业的利器,服务是创造价值的根本</p>
        </div>
    </div>
    <div class="mlz2">
        <div class="dmr">
            <img src="imgd/1449197491.jpg" alt="">
            <img src="imgd/1449817538.jpg" alt="">
            <img src="imgd/1422258511.jpg" alt="">
        </div>
        <div class="dmr2">
            <img src="imgd/1449197491.jpg" alt="">
            <img src="imgd/1449817538.jpg" alt="">
            <img src="imgd/1422258511.jpg" alt="">
        </div>
    </div>
</div>
<div class="dzi">
    <h3>文章列表</h3>
</div>
<div class="dkuai">
    <div class="dkl">
        <p>行业资讯</p>
    </div>
    <div class="dkr">
        <p>公司新闻</p>
    </div>
</div>
<div class="dnei">
    <div class="n1">
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
    </div>
    <div class="n2">
        <div class="divn1">
            <h4><a href="##">2015年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
        <div class="divn1">
            <h4><a href="##">2016年中国贵阳数博会闭幕</a></h4>
            <p><a href="##">2016年中国贵阳数博会闭幕,5月29日在贵阳矩形2016年中国大数据产业峰会暨中国电子商务创新发展峰会</a></p>
        </div>
    </div>
</div>
<div class="gengduo">
    <span>浏览更多文章</span>
</div>
<div class="dzi">
    <h3 style="width: 150px;">浏览更多文章</h3>
</div>
<div class="zhaopian">
    <div class="dimg">
        <img src="imgd/thumb%20(1).jpeg" alt="">
        <p>劳务实名制系统</p>
    </div>
    <div class="dimg">
        <img src="imgd/thumb%20(2).jpeg" alt="">
        <p>互联网消息分发中心</p>
    </div>
    <div class="dimg">
        <img src="imgd/thumb%20(3).jpeg" alt="">
        <p>中国青年旅行社ERP系统</p>
    </div>
    <div class="dimg">
        <img src="imgd/thumb.jpeg" alt="">
        <p>地震数据省级共享平台</p>
    </div>
</div>
<div class="gengduo">
    <span>浏览更多案例</span>
</div>
<div class="dfooter">
    <div class="ddfooter">
        <div class="f1">
            <h3 style="color:white;">联系我们</h3>
            <div class="fengexian"></div>
            <p><img src="imgd/123.png" alt=""><span>北京西城区西直门外大街1号西环广场T3-9B1室</span></p>
            <p><img src="imgd/321.png" alt=""><span>穆经理:13311063437&nbsp&nbsp&nbsp 010-53681239</span></p>
            <p><img src="imgd/213.png" alt=""><span>ask@aishuoke.com.cn</span></p>
        </div>
        <div class="f1">
            <h3 style="color:white;">关注我们</h3>
            <div class="fengexian"></div>
            <p>关注微博:</p>
            <div class="jln">
                <span class="sp1">

                </span>
                <span class="sp2">

                </span>
                <span class="sp3">

                </span>
            </div>
            <p>微信公众号:</p>
            <div class="jln2">
                 <span class="sp4">

                </span>
            </div>
        </div>
        <div class="f1">
            <h3 style="color:white;">友情链接</h3>
            <div class="fengexian"></div>
            <a href="##">北京艾硕科技网络有限公司</a>
        </div>
    </div>
</div>
<script src="js/jquery-1.12.1.min.js"></script>
<script src="swiper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
    var index2=0;
    $(".dmr2 img").on("mouseenter",function () {
        index2=$(this).index();
        $(".dmr img").eq(0).css("z-index","0");
        $(".dmr img").eq(1).css("z-index","0");
        $(".dmr img").eq(2).css("z-index","0");
        $(".dmr img").eq(index2).css("z-index","1")
    });
    $(".dkl").on("click",function () {
        $(this).css({
            backgroundColor: "#1b6d85",
            color:"white"
        });
        $(".dkr").css({
            backgroundColor: "white",
            color:"black"
        });

        $(".n1").animate({
            left:"0"
        });
        $(".n2").css({
            left:"100%"
        });
    });
    $(".dkr").on("click",function () {
        $(this).css({
            backgroundColor: "#1b6d85",
            color:"white"
        });
        $(".dkl").css({
            backgroundColor: "white",
            color:"black"
        });
        $(".n1").css({
            left:"-100%"
        });
        $(".n2").animate({
            left:0
        });
    });
    $(document).on("scroll",function () {
        if($(document).scrollTop()>643){
            $('.dnei').addClass('animated fadeInLeft');
        }
        if($(document).scrollTop()>24){
            $('.dmiddle').addClass('animated fadeInLeft');
        }
        if($(document).scrollTop()>1087){
            $(".dimg").eq(0).slideDown(300);
            $(".dimg").eq(1).slideDown(500);
            $(".dimg").eq(2).slideDown(700);
            $(".dimg").eq(3).slideDown(900);
        }
    });
    function signout() {
        window.location.assign("shouye_api.php");
    }
</script>
</body>
</html>