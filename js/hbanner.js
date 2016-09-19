//banner滚动
var myswiper = new Swiper(".swiper-container", {
	autoplay: 3000,
	// 分页点
	pagination: '.swiper-pagination',
	paginationClickable: true,
	// 左右切换的button
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	spaceBetween: 0,
	loop: true,
})
//header动态白色
var timer = null;
function Dong() {
	var index = 0;
	clearInterval(timer);
	timer = setInterval(function() {
		index++;
		if(index == $(".swiper-slide").length - 2) {
			index = 0;
		}
		var t = $(".swiper-slide.swiper-slide-active").attr("data-swiper-slide-index");
		$(".header_inner").addClass("white_header");
		$(".header_inner").eq(t).removeClass("white_header");
	}, 200)
}
Dong();