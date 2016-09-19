$(".type_choose ul li").on("click",function(){
	var t = $(this).index();
	$(".type_choose ul li").removeClass("select");
	$(this).addClass("select");
	$(".choose_details_inner").css("display","none");
	$(".choose_details_inner").eq(t).css("display","block");
})
