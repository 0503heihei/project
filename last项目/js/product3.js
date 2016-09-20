var swiper = new Swiper('header .swiper-container', {
	direction: 'vertical',
	spaceBetween: 100,
	effect: 'fade',
	autoplay: 5000,
	loop: true
});

var swiper = new Swiper('.sec2 .swiper-container', {
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	slidesPerView: 1,
	paginationClickable: true,
	spaceBetween: 30,
	autoplay: 5000,
	loop: true
});
$(".head li").each(function(i, elem) {
	$(elem).hover(function() {
		$(this).css({
			backgroundColor: "#fff",
			transform: "scale(1.1)"
		})
		$(".icon_content h3").eq(i).animate({
			bottom: "0"
		}, 500)
	}, function() {
		$(this).css({
			backgroundColor: "#FFC000",
			transform: "scale(1)"
		})
		$(".icon_content h3").css({
			bottom: "-30px"
		}, 500)
	})
})

var broBol = window.navigator.userAgent.indexOf("FireFox") == -1;
if(broBol) {
	// 不是火狐浏览器
	document.onmousewheel = function() {
		navScroll();
	}
} else {
	// 兼容火狐，使用addEventListener添加// DOMMouseScroll
	document.addEventListener("DOMMouseScroll", function() {
		navScroll();
	}, false)
}

function navScroll() {
	var scrollTopValue = document.documentElement.scrollTop || document.body.scrollTop;
	if(scrollTopValue > 720) {
		$("#h_nav").slideDown();
		$("#h_scroll").hide();
	} else {
		$("#h_nav").hide();
		$("#h_scroll").show();
	}
}
navScroll();
$(function() {
	var dec = {
		left: {
			top: '0',
			left: '-100%'
		},
		right: {
			top: '0',
			left: '100%'
		},
		bottom: {
			top: '100%',
			left: '0'
		},
		top: {
			top: '-100%',
			left: '0'
		}
	};
	$('.bigbox .bb_box').each(function() {
		new MouseDirection(this, {
			enter: function($element, dir) {
				//每次进入前先把.trans类移除掉，以免后面调整位置的时候也产生过渡效果
				var $content = $element.find('.bb_content').removeClass('trans');
				//调整位置
				$content.css(dec[dir]);
				//reflow
				$content[0].offsetWidth;
				//启用过渡
				$content.addClass('trans');
				//滑入
				$content.css({
					left: '0',
					top: '0'
				});
			},
			leave: function($element, dir) {
				$element.find('.bb_content').css(dec[dir]);
			}
		});
	});
});

var bpSrcs = ["img/product3/showcase/06.jpg", "img/product3/showcase/neighbor.jpg", "img/product3/showcase/history_KPI.jpg", "img/product3/showcase/03.jpg", "img/product3/showcase/map.jpg", "img/product3/showcase/detail.jpg", "img/product3/showcase/place.jpg", "img/product3/showcase/10 (1).jpg", "img/product3/showcase/heat.jpg", "img/product3/showcase/accout.jpg", "img/product3/showcase/charts.jpg", "img/product3/showcase/customer.jpg", "img/product3/showcase/06.jpg"];

var bpwords = ["购物中心", "我的邻邦", "历史KPI", "商场一角", "城市价值分布", "明细记录", "领地", "路边商铺", "热力图", "账户预览", "仪表盘", "实时客存"];

var t = 0,
	l = 0;
$('.bb_content').each(function(i, elem) {
	var boxW = $(".bigbox").width();
	var boxH = $(".bigbox").height();
	$(elem).on("click", function() {
		$(".bp_pic").attr("src", bpSrcs[i]).width();
		$(".bp_word").text(bpwords[i]);
		var w = $(".bp_pic").width() + 30;
		var h = $(".bp_pic").height() + 30;
		t = $('.bb_box').eq(i).get(0).offsetTop + $(this).height() / 2;
		l = $('.bb_box').eq(i).get(0).offsetLeft + $(this).width() / 2;
		console.log(t + ":" + l);
		$(".big_pic").css({
			top: t + "px",
			left: l + "px",
			width: 0,
			height: 0
		}).animate({
			top: (boxH - h) * 0.5 + "px",
			left: (boxW - w) * 0.5 + "px",
			width: w,
			height: h
		}, 300);
		$(".bp_cha").show();
		$(".bp_word").show();
	});
})
$(".bp_cha").on("click", function() {
	$(".big_pic").animate({
		top: t + "px",
		left: l + "px",
		width: 0,
		height: 0
	}, 300, function() {
		$(".bp_pic").attr("src", "");
		$(".bp_cha").hide();
		$(".bp_word").hide();
	});
})
var map = new BMap.Map("map_map");
var point = new BMap.Point(116.404, 39.915);
map.centerAndZoom(point, 15);

var imgs = [];
for(var s = 0; s < 11; s++) {
	imgs[s] = new Image;
	imgs[s].src = arr[s];
}
	var flow = document.getElementById("flow");

	function rand(min, max) {
		return Math.floor(Math.random() * (max - min + 1) + min)
	}

	var hs = [];

	function pubu(bol) {
		var lis = document.querySelectorAll("#flow>li");
		var cols = Math.floor(document.getElementById("pubuBox").clientWidth / 265);
		flow.style.width = cols * 265;

		var arrH = []
		for(j = 0; j < cols; j++) {
			arrH[j] = 0;
		}

		for(var k = 0; k < 11; k++) {
			var li = lis[k] || document.createElement("li");
			li.appendChild(imgs[k]);

			var h = hs[k] || rand(300, 500);
			li.style.height = h + "px";

			if(bol) {
				hs.push(h)
			}
			var minH = arrH[0];
			var minI = 0;

			for(var s = 0; s < arrH.length; s++) {
				if(minH > arrH[s]) {
					minH = arrH[s];
					minI = s;
				}
			}
			li.style.left = minI * 265 + "px";
			li.style.top = arrH[minI] + "px";
			if(bol) {
				flow.appendChild(li)
			}
			arrH[minI] = arrH[minI] + li.offsetHeight
		}

	}
	window.onresize = function() {
		pubu(false)
	}
	pubu(true);