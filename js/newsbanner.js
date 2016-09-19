var timer = null;
function newsDong(){
	var index = 0;
	clearInterval(timer);
	timer = setInterval(function(){
		index++;
		if(index == $(".newsbanner").length-2){
			index = 0;
		}
		var m = $(".newsbanner.swiper-slide-active").attr("data-swiper-slide-index");
		$(".newReleaseMenu ul li").removeClass("on");
		$(".newReleaseMenu ul li").eq(m).addClass("on");
	}, 200)
}
newsDong();