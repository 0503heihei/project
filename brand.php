<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>品牌动态 - 葡萄科技官网 - 科技陪伴成长</title>
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/animate.css"/>
		<link rel="stylesheet" type="text/css" href="css/header.css"/>		
		<link rel="stylesheet" type="text/css" href="css/hbanner.css"/>
		<link rel="stylesheet" type="text/css" href="css/brand.css"/>
		<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	</head>
		<div class="wrap">
			<!--导航栏-->
			<div class="header" id="returnTop">
				<div class="header_inner">
					<a href="index.php" class="logo"></a>
					<ul class="header_nav">
						<li><a href="index.php">首页</a></li>
						<li><a href="brand.php">品牌动态</a></li>
						<li><a href="theatre.php">葡星剧场</a></li>
						<li><a href="pt_home.php">葡萄之家</a></li>
						<li><a href="app.php">应用下载</a></li>
					</ul>
					<div class="login_info">
						<!-- 动态登录 -->
						<?php
							if(isset($_SESSION["user"]) && isset($_SESSION["pass"])){
								echo "<a href='#' class='namestyle'>{$_SESSION["user"]}</a>";
						echo "<ul class='signout'><li><a href='javascript:signOut();'>退出登录</a></li></ul>";
						} else{
						echo "<a href=\"signin.php\" class=\"login\"></a>";
						}
						?>
						<!--<a href="signin.php" class="login"></a>-->
						<a href="shop_maill.php" class="shop_mall"></a>
					</div>
				</div>
			</div>
			<!--banner-->
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=BikLIx" target="_blank" class="banner1"></a>
					</div>
					<div class="swiper-slide">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=krZMI8" target="_blank" class="banner2"></a>
					</div>
					<div class="swiper-slide">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=D9nUJz" target="_blank" class="banner3"></a>
					</div>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>			
			<div class="brand-container">
				<div class="pic_list">
					<a href="http://www.sootoo.com/content/665955.shtml" target="_blank">
						<img src="img/listpic01.jpg"/>
					</a>
					<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=y7mbY2" target="_blank">
						<img src="img/listpic02.jpg"/>
					</a>
					<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=BikLIx" target="_blank">
						<img src="img/listpic03.jpg"/>
					</a>
				</div>
				<div class="events">
					<div class="title">
						<p>品牌事件</p>
					</div>
					<div class="event">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=D9nUJz" class="event1">
							<div class="eventtxts">
								<p class="eventtitle">葡萄科技将发布儿童机器人电脑</p>
								<p class="eventdate">2016.9.18</p>
								<p class="eventdes">葡萄科技发布首款儿童机器人电脑，创造儿童未来生活方式，让儿童电脑从单纯PC功能迈向智能生活的新纪元。</p>
							</div>
						</a>
					</div>
					<div class="event">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=D9nUJz" class="event2-left">
							<div class="eventtxts2">
								<p class="eventtitle">葡萄科技首涉人工智能</p>
								<p class="eventdate">2016.9.12</p>
								<p class="eventdes">9月25日下午，2016葡萄科技战略产品发布会将在上海世博中心举行。葡萄科技创始团队将发布葡萄科技最新两款重拳产品。</p>
							</div>
						</a>
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=SBAOkq" class="event2-right">
							<div class="eventtxts2-white">
								<p class="eventtitle white-event">优世足球</p>
								<p class="eventdes white-event">葡萄科技冠名优世足球少儿俱乐部，全程赞助并参与优世足球第二届优世足球小将争霸赛以及夏令营活动</p>
							</div>
						</a>
					</div>
					<div class="event">
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=opAdiS" class="event3-left">
							<div class="eventtxts3-left">
								<p class="eventtitle">车享科技 脑动一夏</p>
								<p class="eventdate">2016.8.11</p>
								<p class="eventdes">2016年暑假档葡萄科技与凯迪拉克合作，在华东区47家凯迪拉克门店各举办数场亲子活动。</p>
							</div>
						</a>
						<a href="http://www.putao.com/brandShow?name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6&tag=SBAOkq" class="event3-right">
							<div class="eventtxts3-right">
								<p class="eventtitle">《脑动大联盟》重磅开播</p>
								<p class="eventdate">2016.8.27开播</p>
								<p class="eventdes">《脑动大联盟》是一档儿童益智类节目，于2016年8月27日开始每周六晚黄金时段，播出于浙江少儿频道，持续三个月共12期。</p>
							</div>
						</a>
					</div>
					<div class="more">
						<a href="brandList?tag=brand_ppsj_top&name=%E5%93%81%E7%89%8C%E4%BA%8B%E4%BB%B6">更多事件</a>
					</div>
				</div>
				<a href="http://www.sootoo.com/content/665955.shtml" target="_blank" class="morebanner"></a>				
				<div class="medialist">
					<div class="title">
						<p>媒体报道</p>
					</div>
					<ul>
						<li>
							<p>
								<span>2016.8.23</span>
								<span>速途网</span>
							</p>
							<a href="http://www.sootoo.com/content/665955.shtml" target="_blank">
								<img src="img/media01.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">葡萄科技：科技陪伴成长</a>
								<p>葡萄科技COO林泰君做客速途网，讲述了他的创业历程和葡萄科技的未来规划。</p>
							</div>
						</li>
						<li>
							<p>
								<span>2016.7.7</span>
								<span>齐鲁晚报</span>
							</p>
							<a href="http://www.qlwb.com.cn/2016/0707/666802.shtml" target="_blank">
								<img src="img/media02.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">葡萄科技 : 用科技颠覆教育</a>
								<p>葡萄科技自成立起，就致力于为3-12岁儿童及其家长，提供全生态产品及服务。</p>
							</div>
						</li>
						<li>
							<p>
								<span>2016.8.11</span>
								<span>搜狐娱乐</span>
							</p>
							<a href="http://yule.sohu.com/20160811/n463761373.shtml" target="_blank">
								<img src="img/media03.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">《Q淘小咖秀》: 用3分钟讲好一个故事</a>
								<p>当每一部作品注入了梦想和匠心，国产动漫产业才真正撑得起这个未来全球最大的市场。</p>
							</div>
						</li>
						<li>
							<p>
								<span>2016.6.1</span>
								<span>DONEWS</span>
							</p>
							<a href="http://www.donews.com/media/201606/2929401.shtm" target="_blank">
								<img src="img/media04.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">葡萄科技受巴斯夫邀请畅谈理念</a>
								<p>葡萄科技设计师受邀参加成立仪式，并与巴斯夫技术专家共同探讨了材料的“健康舒适”理念。</p>
							</div>
						</li>
						<li>
							<p>
								<span>2016.8.11</span>
								<span>CCTIME飞象网</span>
							</p>
							<a href="http://www.cctime.com/html/2016-8-2/1202013.html" target="_blank">
								<img src="img/media05.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">葡萄科技携手凯迪拉克畅享儿童科技</a>
								<p>葡萄科技携手凯迪拉克，在上海凯迪拉克门店合作举办了“脑动一夏·车享科技”互动体验活动。</p>
							</div>
						</li>
						<li>
							<p>
								<span>2016.9.2</span>
								<span>搜狐娱乐</span>
							</p>
							<a href="http://yule.sohu.com/20160902/n467364963.shtml" target="_blank">
								<img src="img/meida06.jpg" alt="" />
							</a>
							<div class="mediatxts">
								<a href="">《脑动大联盟》首播大热激发儿童想象</a>
								<p>由葡萄科技冠名的大型益智类节目《脑动大联盟》，每周六晚8：10在浙江8套少儿频道播出。</p>
							</div>
						</li>
					</ul>
					<div class="more">
						<a href="http://www.putao.com/brandList?tag=brand_mediacoverage&name=%E5%AA%92%E4%BD%93%E6%8A%A5%E9%81%93">更多报道</a>
					</div>
				</div>
				<div class="brandCooperation">
					<div class="hrtitle">
						<span></span>
						<span>品牌合作</span>
					</div>
					<div class="brandicons"></div>
				</div>
				<div class="brandCooperation">
					<div class="hrtitle">
						<span></span>
						<span>内容合作商</span>
					</div>
					<div class="brandicons2"></div>
				</div>
				<div class="title">
					<p>新品发布会</p>
				</div>
				<!--下面的banner滚动-->
				<div class="newReleaseMenu">
					<div></div>
					<ul>
						<li class="on">
							<p><span></span></p>
							<p>2016 Q2</p>
						</li>
						<li>
							<p><span></span></p>
							<p>2016 Q1</p>
						</li>
						<li>
							<p><span></span></p>
							<p>2015 Q4</p>
						</li>
					</ul>
				</div>
				<div class="newRelease swiper-container">
					<div class="swiper-wrapper">
						<div class="newsbanner newsbanner01 swiper-slide">
							<a href="http://www.putao.com/page_carnival?name=2016Q2&description=1"></a>
						</div>
						<div class="newsbanner newsbanner02 swiper-slide">
							<a href="http://www.putao.com/page_carnival?name=2016Q1&description=1">
						</div>
						<div class="newsbanner newsbanner03 swiper-slide">
							<a href="http://www.putao.com/page_carnival?name=2015&description=1"></a>
						</div>
					</div>
				</div>
				<div class="brandStory"></div>
			</div>
			
			<footer>
			<div id="footer">
				<div class="bottom-nav">
					<a href="index.html" class="bottom-logo"><img src="img/bottom/logo-bottom.png" /></a>
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
		<div class="footer_functions">
			<a href="http://vipwebchat.sh.tq.cn/pageinfo.jsp?version=vip&amp;admiuin=9730189&amp;ltype=0&amp;iscallback=0&amp;is_message_sms=0&amp;is_send_mail=0&amp;action=acd&amp;acd=1&amp;type_code=1001" target="_blank"></a>
			<a href="#returnTop"></a>
		</div>
		</div>
		
		<script src="js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery-2.1.3.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/hbanner.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/newsbanner.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/signin.js" type="text/javascript" charset="utf-8"></script>
	</body>
</html>
