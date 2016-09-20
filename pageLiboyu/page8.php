
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
            <a class="page4" href="">3.金博会闭幕 移动互联网金融成大趋势</a>
            <a class="page1" href="">1.2016年中国贵阳数博会闭幕</a>
            <a class="page2" href="">2.“互联网+”时代下的银行信息安全</a>
            <a class="page9" href="">4.IBC 2015: R&S展示最新的高性能存储解决方案</a>
            <a class="page11" href="">5.高等教育如何跟上大数据时代?</a>
            <a class="page13" href="">6.USB技术发明人没用专利赚过一分钱</a>
            <a class="page14" href="">7.“互联网+”落地 离不开通信行业助力</a>
        </li>
    </ul>
    <ul class="content-wrap" >
        <li>
            <h3>光通信的下一站？ 欢迎参加2015光通信技术和发展论坛</h3>
            <span>2016-05-31</span>
            <span>11:20:52</span>
            <a href="http://www.aishuoke.com.cn/" title="北京艾硕科网络科技有限公司" style="color: #00adee">北京艾硕科网络科技有限公司</a>
            <span>阅读</span>
            <span>140</span>
        </li>
        <li>
            <p>随着互联网+时代的崛起，智慧城市和大数据时代的到来，以及国家“一带一路”政策的落地，光通信产业又迎来新的发展契机。</p>
            <p>与此同时，2015年又是国际光年，以表彰光领域的一切重大发现及光技术对于人类生存与发展的重要性。光通信技术是人类在光领域的重大发明与创造，从光通信的诞生到现在，已经在全世界范围内得到了广泛应用。光通信技术对于构建“智慧地球”，建立“地球村”，改善人类生存环境，缩小人类的“数字鸿沟”，提高信息安全保障水平，积极推进“全球经济一体化进程”，为人类创造财富、积累财富做出了重大贡献。</p>
            <p>在我国，光纤通信广泛应用于各行各业，已成为推动我国经济发展的重要支柱产业。基于光纤通信构建“城市光网”是实现智慧城市信息化建设的重要技术基础。随着移动互联网、物联网、云计算、大数据、软件定义网络及数据中心等网络技术及应用的发展，光通信网络进一步向高带宽、大容量、高效承载及全IP化的分组光传送网方向演进与发展；软件定义网络及技术的发展，不仅影响光通信网络的体系架构，还将触及光通信产业的变革，其影响不仅巨大，而且深远。另一方面，数据中心光互联的发展需求以及数据中心向云数据中心的演进与发展又进一步拉动光通信及产业的发展，从光器件、光模块到光通信系统，数据中心都提出了新的要求。展望未来，光纤通信将进一步朝着超高速、超大容量、超长距离方向发展，这一发展趋势，要求光通信产业要适应这一发展要求。</p>
            <p>为探索光通信产业技术及市场发展新趋势，由中国国际光电博览会（CIOE）、中国通信学会光通信委员会、工信部通信科技委传送与接入网专家咨询组、中国信息通信研究院通信标准研究所联合主办的2015光通信技术和发展论坛将于8月31日-9月2日盛大举行，本次论坛下辖一个主题大会，5个专题分会，围绕当前行业热点，如下一代光接入网及智慧家庭网络、新一代光传送网、软件定义光网络、光子集成、数据中心与光互连等进行专题讨论，期望探索并分享当前行业发展的热点和机遇。</p>
            <h5>主题大会：2015光和光基技术</h5>
            <p>在主题大会方面，今年可谓是星光闪耀，集聚了许多行业知名和领军嘉宾，包括中国科学院院士、中国光学学会副理事长兼秘书长龚旗煌，中国科学院院士、中国光学学会理事长，中国科学院量子信息重点实验室主任郭光灿，中华医学会激光医学分会主任委员、全军激光医学专业委员会主任委员顾英，工业和信息化部通信科技委常务副主任、中国电信集团公司科技委主任韦乐平均将出席“2015光和光基技术——光电产业发展高峰论坛”并发表大会主题报告。</p>
            <p>其中中国电信集团科技委主任韦乐平将在本次论坛上发表题为《互联网时代对光通信发展的期待》的主题报告，探索互联网时代给光通信市场带来的重大影响。</p>
            <p>韦乐平将从多个角度阐述互联网的发展决定了光网络未来发展的方向。然后，从互联网应用对于基础光网络的三个基本期待出发，从宏观发展环境、企业深化转型到技术创新方向等三个方面分别论述了怎样做到光网络带宽足够宽，光网络带宽提供足够快、光网络带宽资费足够低，从而使得光网络的发展能够适应互联网发展的要求。</p>
            <h5>专题分会一：下一代光接入网及智慧家庭网络</h5>
            <p>互联网的发展对光网络的主要诉求是带宽大小足够宽、带宽提供足够快、带宽资费足够低。影响带宽涉及国际、网间、骨干/城域/接入、应用层等。
                其中，接入网是物理层链路带宽的关键，物理层是全网宽带化的基础，不仅要继续大力推进FTTH和LTE，而且要着力提升接入速率；节点是物理层瓶颈，带宽不仅涉及链路的带宽，还涉及节点的容量和自动化程度；运营商网络管理体制也是制约因素，现有分域分割管理体制难以实现端到端统一运营；网站的带宽和处理能力常常也是端到端带宽的瓶颈；此外，由于多种可能的原因，用户CPE也常常是影响带宽的麻烦源。</p>
            <p>根据“VDSL, G.Fast和下一代FTTH战略和供应商领导力调研”调研了全球20家从事固网宽带业务的电信运营商对下一代宽带技术的看法。调查结果发现40%的受访运营商表态会在2017年引入千兆宽带业务，而今年这一比例只有15%。 Infonetics分析师Jeff Heynen指出，宽带收入是固网运营商抵消语音业务下滑的重要手段。驱动固网宽带业务发展的推动力主要是在线视频业务。智慧家庭，多屏显示，安防都是固网宽带未来最主要的应用领域。
                中国的运营商的步伐更快，有消息显示中国三大运营商都已经开始了千兆入户的试点工作，中国联通更是宣布将在2015CIOE现场举办“宽带网络千兆到户发布会”，让人对运营商的动作更加期待。</p>
            <p>中国运营商为何要这样快引入千兆入户？有分析指出宽带中国的大战略要求中国的电信运营商追赶上世界宽带发展的大潮流。宽带接入业务开放给民营企业，有望在这个领域引入更多竞争。 100M光纤到户已经发展了相当一段时间，下一步应该是千兆。在线视频业务在中国正获得更快的发展。
                中国电信运营商的决策虽然微观上难以预测，但是宏观上当千兆FTTH成为世界主流时，中国会跟上，时点上会比先进国家略晚，但是比其他国家早。这一点在FTTH引入中国时看得特别明显。
                未来3年在5G尚未发展起来，4G部署接近完成后，电信运营商的投资需要新的去向。 3年后10G PON, WDM PON等技术都会更加便宜。千兆FTTH部署的成本大大降低。 4G移动回传和前传等的需求会对光纤接入网的带宽提出更高要求。
                种种原因似乎显得运营商在上马千兆入户似乎是迫在眉睫，在8月31日举行的2015下一代光接入网及智慧家庭网络发展与应用专题分会上，中国通信标准化协会传输网和接入网技术委员会主席毛谦、中国联通网络技术研究院网络技术研究部宽带网络研究室室主任张沛、中国电信上海研究院基地网络部主任沈成彬、中国移动通信有限公司研究院网络技术研究所张德朝、以及中兴通讯、华为、深圳市雍邑科技都将发表精彩演讲。
                中国电信上海研究院基础网络部主任沈成彬博士将阐述中国电信对于以SDN/NFV为核心特征的下一代接入网的系统架构、应用场景、演进路线、关键技术和产业发展要点。结合中国电信“悦me”和互联网厂商的智能路由器产品发展情况，阐述以智能化、开放化为核心特征的下一代智慧家庭技术与产业发展现状、趋势和关键技术。探讨后续产业发展中需要关注的问题。</p>
            <p>三大运营商齐齐亮相不仅说明了对本次会议的重视程度，同时也可以看出运营商对待下一代光接入网及智慧家庭网络的关注程度。千兆入户、智慧家庭、面向家庭的产品服务和业务创新…，让我们来期待下他们在本次会议上如何阐述各自的理念和战略吧。
                本次会议还有一个亮点是可见光通信，来自复旦大学信息学院通信系主任迟楠教授迟楠教授将描绘这种技术的美好前景：当今世界正在演绎一场“Anywhere, anytime”接入方式的深刻变革，社会也在呼唤一种拓宽频谱资源、绿色节能、可移动的接入方式。可见光通信(VLC)是顺应这种潮流的完美选择。可见光通信采用白光LED作为光源，利用LED灯光承载的高速明暗闪烁信号来传输信息。
                当今可见光通信技术的研究正在经历一个新概念、新技术层出不穷的极为活跃的发展期。无论从国家战略层面，还是节能减排的迫切需求，或者巨大的市场潜力来考虑，可见光通信作为一种照明和光通信结合的新型模式推动下一代照明和接入网的发展和技术进步，已成为国际竞争的焦点和制高点。</p>
            <h5>专题分会二：2015光通信网络及技术创新与发展</h5>
            <p>在经历了多年的高速发展之后，光通信产业仍有那些热点技术和话题被大家所关注？是热门的软件定义网络SDN，超100G技术，还是多维复用和相干技术，IP与光网络深度融合提升超大容量路由技术，基于CDC-F特性光交叉技术，还是高效、低成本的中短距离城域高速传输直调直检技术，走向全光网，从芯片间、板间到机房间的光互联技术，还是一直被讨论的绿色通信话题？
                凡此种种，都将在会在2015光通信技术和发展论坛下属的“2015光通信网络技术创新与发展专题分会”得到探讨和延伸。
                由武汉邮电科学研究院原副院长兼总工程师，现任高级顾问毛谦担任会议主席，中国通信学会光通信委员会主任委员余少华将发表主旨报告，邀请了中国移动通信有限公司研究院网络技术研究所副所长李晗、中国联通集团研究院首席专家唐雄燕、中国电信股份有限公司北京研究院光通信研究中心主任李俊杰、中国移动通信有限公司研究院王磊等运营商代表，以及中国信息通信研究院通信标准研究所传送与接入研究部主任张海懿、北京邮电大学信息光子学与光通信国家重点实验室研究院副院长张杰、烽火通信、中兴通讯、上海贝尔、康宁CORNING等知名机构和企业代表，强大豪华的全明星阵容，一线研究和开发的领军人物，将带领我们探究光通信当前发展现状和未来趋势，机会实在难得！
                除此之外，本次会议还将举行圆桌讨论会，探讨的话题包括但不限于：

                 与云、大数据技术融合，光通信SDN走进2.0时代，SDN将使传送网更加软件化和实现统一管理，而且做到网络随云而动。SDN控制器/应用的部署灵活性、数据存储、处理能力、安全性及超大流量下的网络稳定性都将受到巨大挑战。
                传送网在组网网上应适应“以数据中心”为网络核心的改变？
                超越100G，单通道传输速率继续提升，超高速率100G以上WDM系统将走上商用，具有灵活频谱和速率选择能力。WDM/OTN系统的传输容量提升较快，光层的灵活调度和高效处理成为了光网络节点的一个重要需求。</p>
            <h5>400G技术：应用场景和业务前景</h5>
            <p>智能路由器后续发展方向
                当前通信网络采用多层多域网络承载业务，设备种类繁多，海量数据的分组处理能力呈指数级别提高，同时对超大容量路由运算能力提出越来越高的要求,导致机房空间紧张、能耗高、效率低。IP与光网络的融合是解决问题的有效方式之一。
                为了满足骨干网络上千公里长距离传输的要求，目前主流的传输技术是相干传输技术。但是在城市之间的组网，往往传输距离在300公里以下。在这种情况下，如何避免使用相干探测的方式(系统复杂，成本较高)，达到良好的传输和组网效果，是现在研究的热门话题……………</p>
            <h5>专题分会三：光子集成技术与光电器件技术研讨会</h5>
            <p>由于光和电采用分立方式，光子与电子技术遵循各自的发展路线，目前光通信系统在功耗、成本、集成度方面遇到提升瓶颈。
                高速光电子技术的发展方向是光子集成。为了推动这件有意义的工作，中国光博会（CIOE）连续多年举行光子集成方面的研讨会，并利用下属媒体平台和各类活动上积极介绍光子集成芯片技术的发展动态和重要意义，同时还多次组织国内外相关专家进行研讨。
                在2015光子集成技术与光电器件技术研讨会上，组委会邀请国内许多光子集成专家和企业，包括中国科学院半导体所副所长祝宁华，中科大光电子重点实验室、中科大先进技术研究院副院长、863专家刘文、意法半导体、NANO科技、长飞光纤光缆、武汉光迅、苏州旭创、华工正源光子等专研光子集成的专家和企业莅临现场，就当前热门的Ge/Si光芯片、硅光子等技术发表精彩演说。</p>
            <h5>专题分会四：数据中心与光互连技术及发展研讨会</h5>
            <p>伴随着大数据和云技术的蓬勃发展，短到芯片片上和片间、长到机柜间和数据中心间的大规模数据交换处理，都渴望高速、稳定、可靠的互联，常规电缆连接将无法应对。
                目前看来，芯片间和板间的解决方案可以利用硅基光电集成来有效实现光互联。机房间互联、机架间互联、机框间互联、机盘间互联可以利用光电转换和光传输技术取代传统的电缆，主要解决方案包括硅基的光电集成、高速VCSEL和直调DFB等。其中硅基光电集成方案具有CMOS工艺兼容，集成度高，成本低的优势。
                未来几年，光互联技术将在芯片内部、芯片间、板间、机柜间、机房间普及应用。
                在的数据中心方面，来自北京邮电大学的伍剑教授将提出一种新型基于小世界拓扑构造的数据中心网络架构，以环形快速光突发交换网络为基本构造单元，通过增加随机波长连接、基于小世界拓扑扩展方法来构造低平均跳数、低时延、高连通性的大规模数据中心光互联网络架构。同时建立了包括数据中心内及数据中心间的光互联网络实验平台，并基于SDN技术实现了数据中心资源虚拟化控制。
                除此之外，北京大学周治平教授，上海交通大学副教授周林杰，香港理工大学郑建成，北大研究生院副教授、美国加州理工学院博士张昭宇，PETRA的Kazuhiko Kurata博士，康宁Ming Jun Li，华为，AVAGO也将带来精彩报告与业界分享。</p>
            <h5>小结</h5>
            <p>时代在发展，行业在变迁，业界对技术的追求永不停步，尽管行业热点变换不断、部分企业聚焦应用模式和业务创新，但这并不妨碍技术的发展。相反，应用的扩大，大数据、云计算、智慧城市/智慧家庭的发展，也将大大拓展新技术的应用空间和广度，并对产业提出新的要求，2015光博会同期还将举行2015中国智慧城市创新产业大会，2015 IIC-China等展会让跨界合作成为可能，我们关注技术、关注产业，关注应用，感受市场的脉搏变化，迎接新的发展契机。2015光通信技术和发展论坛：光通信的下一站！8月31日-9月3日深圳会展中心，我们不见不散。</p>

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
            <li>上一条 <a class="page7" href="" style="color: #00ADEE">“互联网+”将成为外包发展新动力  </a></li>
            <li>下一条 <a class="page9" href="" style="color: #00ADEE">IBC 2015: R&S展示最新的高性能存储解决方案</a></li>
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

