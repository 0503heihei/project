$(document).ready(function(){
	 $('.lis>ul').on('click','li',function(e){
            var target = e.target;
            var id = $(target).data("to");
            switch(id){
            		case 'go1':
					color = "#334960",
					bg = "#3F9FC9"
            		break;
            		case 'go2':
            			color = "#F17C72",
            			bg ="#E6655E"
            		break;
            		case 'go3':
            			color = "#32AC97",
            			bg = "#46DCC7"
            		break;
            		case 'go4':
            			color = "#7F4C76",
            			bg = "#B288AB"
            		break;
            		case 'go5':
            			color = "#F18A52",
            			bg = "#F5AD86"
            		break;
            		case 'go6':
            			color = "#3F9FC9",
            			bg = "#37637F"
            		break;
            }
            $('.nav').css({
            		"backgroundColor":color,
            		"transition":"1s"
            })
            $('.lis>div').css({
            		"backgroundColor":bg,
           	});
            $('html,body').animate({scrollTop:$('#'+id).offset().top}, 1000);
        });
	$(".li2").on("mouseenter",function(){
		$(".bg2").animate().stop();
		$(".bg2").slideDown();
	});
	$(".li2").on("mouseleave",function(){
		$(".bg2").slideUp();
	})


	
	
	
	
	$(".li3").on("mouseenter",function(){
		$(".bg3").animate().stop();
		$(".bg3").slideDown();
	});
	$(".li3").on("mouseleave",function(){
		$(".bg3").slideUp();
	})
	
	
	
	$(".li4").on("mouseenter",function(){
		$(".bg4").animate().stop();
		$(".bg4").slideDown();
	});
	$(".li4").on("mouseleave",function(){
		$(".bg4").slideUp();
	})
	$(".li5").on("mouseenter",function(){
		$(".bg5").animate().stop();
		$(".bg5").slideDown();
	});
	$(".li5").on("mouseleave",function(){
		$(".bg5").slideUp();
	})
	$(".li6").on("mouseenter",function(){
		$(".bg6").animate().stop();
		$(".bg6").slideDown();
	});
	$(".li6").on("mouseleave",function(){
		$(".bg6").slideUp();
	})
	$(".li7").on("mouseenter",function(){
		$(".li7").css("color","red");
	});
	$(".li7").on("mouseleave",function(){
		$(".li7").css("color","white");
	})
	$(".li8").on("mouseenter",function(){
		$(".li8").css("color","red");
	});
	$(".li8").on("mouseleave",function(){
		$(".li8").css("color","white");
	})
	
	
	
	$(".firstpage").hover(function() {
		$(".firstpage").css({
			"color":"white",
			"background":"#990000",
			"border":"0.5px solid white"
		}).html("首页")
	}, function() {
		$(".firstpage").html("");
		$(".firstpage").css("background","")
	});
	$(".baozhang").hover(function() {
		$(".baozhang").css({
			"color":"white",
			"background":"#ff6600",
			"border":"0.5px solid white"
		}).html("保障")
	}, function() {
		$(".baozhang").html("");
		$(".baozhang").css("background","")
	});

	$(".baozhang").on("click",function(){
		window.open("safeguard.html")
	})

	$(".liucheng").hover(function() {
		$(".liucheng").css({
			"color":"white",
			"background":"#fe6767",
			"border":"0.5px solid white"
		}).html("流程")
	}, function() {
		$(".liucheng").html("");
		$(".liucheng").css("background","")
	});
	$(".liucheng").on("click",function(){
		window.open("step.html")
	})
	
	
	
	$(".help").hover(function() {
		$(".help").css({
			"color":"white",
			"background":"#009966",
			"border":"0.5px solid white"
		}).html("帮助")
	}, function() {
		$(".help").html("");
		$(".help").css("background","")
	});
	
	$("#submit1").on("mouseover",function(){
		$("#submit1").css({
			"backgroundColor":"#3F9FC9",
			"border":"1px solid white"
		})
	})
	$("#submit1").on("mouseout",function(){
		$("#submit1").css({
			"backgroundColor":"#3B5997",
			"border":"1px solid transparent"
		})
	})
	
	
})

















