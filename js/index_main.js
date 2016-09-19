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
$(".index_content_left").on("click", function() {
	$(".index_content_left").css({
		"box-shadow": "4px 4px 5px #B8B8B8"
	})
	$(".index_content_right").css({
		"box-shadow": "none"
	})
	$("#index_content_show1").show();
	$("#index_content_show2").hide();
})
$(".index_content_right").on("click", function() {
	$(".index_content_right").css({
		"box-shadow": "4px 4px 5px #B8B8B8"
	})
	$(".index_content_left").css({
		"box-shadow": "none"
	})
	$("#index_content_show1").hide();
	$("#index_content_show2").show();
})
$(".index_footer_weidu").mouseenter(function() {
	$(".erweima").show();
})
$(".index_footer_weidu").mouseleave(function() {
	$(".erweima").hide();
})

	setTimeout(function(){
		$("#brand_middle").css({
			left: '-1367px'
		});
		$("#brand_newlist ul li").removeClass("brand_active");
		$("#brand_newlist ul li").eq(1).attr("class","brand_active");	
	},2000)
	setTimeout(function(){
		$("#brand_middle").css({
			left: '-2734px'
		});
		$("#brand_newlist ul li").removeClass("brand_active");
		$("#brand_newlist ul li").eq(2).attr("class","brand_active");
	},4000)
timer = setInterval(function(){
	setTimeout(function(){
		$("#brand_middle").css({
			left: '0px'
		});
		$("#brand_newlist ul li").removeClass("brand_active");
		$("#brand_newlist ul li").eq(0).attr("class","brand_active");
	},0)
	setTimeout(function(){
		$("#brand_middle").css({
			left: '-1367px'
		});
		$("#brand_newlist ul li").removeClass("brand_active");
		$("#brand_newlist ul li").eq(1).attr("class","brand_active");
	},2000)
	setTimeout(function(){
		$("#brand_middle").css({
			left: '-2734px'
		});
		$("#brand_newlist ul li").removeClass("brand_active");
		$("#brand_newlist ul li").eq(2).attr("class","brand_active");
	},4000)
},6000)
	

