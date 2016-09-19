<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <style type="text/css">
        #list{
            overflow: hidden;
        }
        #list li{
            list-style: none;
            width: 200px;
            height: 200px;
            float: left;
            overflow: hidden;
        }
        #list li img{
            width: 100%;
        }
        .content{
            margin-top: 100px;
        }
        .header {
            width: 100%;
            height: 80px;
            position: fixed;
            z-index: 2;
            top: 0;
        }
    </style>
</head>
<body>
<div class="wrap">
<!--导航栏-->
<div class="header">
    <div class="header_inner">
        <a href="index.php" class="logo"></a>
        <ul class="header_nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="brand.html">品牌动态</a></li>
            <li><a href="theatre.html">葡星剧场</a></li>
            <li><a href="pt_home.html">葡萄之家</a></li>
            <li><a href="app.html">应用下载</a></li>
        </ul>
        <div class="login_info">
            <a href="" class="login"></a>
            <a href="" class="shop_mall"></a>
        </div>
    </div>
</div>

<div class="content">
    <ul id="list">
        <?php
        mysql_connect("localhost", "root", "");
        mysql_select_db("0503");
        mysql_query("set names utf8");

        $sql = "SELECT * FROM image";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)){
            echo "<li>";
            echo "<img src={$row['imgPath']}>";
            echo "</li>";
        }
        mysql_free_result($result);
        mysql_close();

        ?>

    </ul>
</div>


<footer>
    <div id="footer">
        <div class="bottom-nav">
            <a href="index.php" class="bottom-logo"><img src="img/bottom/logo-bottom.png" /></a>
            <ul>
                <li>
                    <h3>订单中心</h3></li>
                <li>
                    <a href="###">购买中心</a>
                </li>
                <li>
                    <a href="###">支付指南</a>
                </li>
                <li>
                    <a href="###">配送指南</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>服务支持</h3></li>
                <li>
                    <a href="###">隐私政策</a>
                </li>
                <li>
                    <a href="###">售后政策</a>
                </li>
                <li>
                    <a href="###">产品常见问题</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>商务合作</h3></li>
                <li>
                    <a href="###">商务合作</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>关于葡萄</h3></li>
                <li>
                    <a href="###">关于葡萄</a>
                </li>
                <li>
                    <a href="###">加入葡萄</a>
                </li>
                <li>
                    <a href="###">联系我们</a>
                </li>
            </ul>
            <ul>
                <li>
                    <h3>关注我们</h3></li>
                <li>
                    <a href="###" id="pt_code">葡萄维度</a>
                    <img id="qcode" style="position: absolute; z-index: 1; top:80px; display: none; right: 60px; width: 160px;" src="img/bottom/7eab92fb77eafce2b9cc886a6d220846ea812a32.png" />
                </li>
            </ul>
            <script type="text/javascript">
                document.getElementById('pt_code').onmouseenter = function() {
                    document.getElementById('qcode').style.display = 'block';
                }
                document.getElementById('pt_code').onmouseleave = function() {
                    document.getElementById('qcode').style.display = 'none';
                }
            </script>
            <div class="online">
                <p class="tel">400-651-6161</p>
                <span>周一至周五 9:00-22:00</span>
                <span>仅收市话费</span>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="copyright-inner">
            <h2>Copyright © 2016, Shanghai Putao Technology Co., Ltd. All Rights Reserved. 葡萄科技</h2>
            <h3>葡萄科技</h3>
            <br>
            <h4>
                <a class="weihuajingying" target="_blank" href="http://sq.ccm.gov.cn/ccnt/sczr/service/business/emark/toDetail/35EE6340F6157151E0530140A8C0E25A">网络文化经营单位</a>
                <a href="http://www.miibeian.gov.cn/state/outPortal/loginPortal.action"> 沪ICP备15015904号-3</a>
            </h4>
        </div>
    </div>
</footer>
</div>
</body>
</html>