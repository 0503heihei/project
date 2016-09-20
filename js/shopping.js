$(function() {
	$("#menu").on("mouseenter", function() {
		$("#menu1").slideDown();
	})
	$("#menu").on("mouseleave", function() {
		$("#menu1").slideUp();
	})
	$("#menu1").on("mouseenter", function() {
		$("#menu1").slideDown();
	})
	$("#menu1").on("mouseleave", function() {
		$("#menu1").slideUp();
	})
	$("#CrawlUrl").on("focus", function() {
		$(".tip_left").css({
			background: "url(img/oneKeytip.gif) no-repeat scroll 0 -31px",
			color: "#FFFFFF"
		});
	})
	$("#CrawlUrl").on("blur", function() {
		$(".tip_left").css({
			background: "url(img/oneKeytip.gif) no-repeat",
			color: "black"
		});
	})
	for(var i = 0; i < $(".cen_le ul li").length; i++) {
		$(".cen_le ul li").eq(i).on("mouseenter", (function(index) {
			return function() {
				$(".cen_le li>div").eq(index).show();
			}
		})(i))
		$(".cen_le ul li").eq(i).on("mouseleave", (function(index) {
			return function() {
				$(".cen_le li>div").eq(index).hide();
			}
		})(i))
	}
	for(var i = 0; i < $(".content1").length; i++) {
		$(".content1").eq(i).on("mouseenter", (function(index) {
			return function() {
				$(".content3").eq(index).show();
			}
		})(i))
		$(".content1").eq(i).on("mouseleave", (function(index) {
			return function() {
				$(".content3").eq(index).hide();
			}
		})(i))
	}
	$(".content2").on("mouseenter", function() {
		$(".content4").show();
	})
	$(".content2").on("mouseleave", function() {
		$(".content4").hide();
	})
	$(".content4").on("click", function() {
		$(document).scrollTop(0);
	})
	
})
var swiper = new Swiper('.swiper-container', {
	pagination: '.swiper-pagination',
	paginationClickable: true,
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	spaceBetween: 30,
	effect: 'fade',
	loop: true,
	autoplay: 3000,
	autoplayDisableOnInteraction: false
});

var bol = window.navigator.userAgent.indexOf("FireFox") == -1;
var content2 = document.querySelector(".content2");
if(bol) {
	document.onmousewheel = function() {
		if(event.wheelDelta >= 50) {
			content2.style.display = "none";
		} else{
			content2.style.display = "block";
		}
	}
} else {
	document.addEventListener("DOMMouseScroll", function() {
		if(event.wheelDelta >= 0) {
			content2.style.display = "none";
		} else {
			content2.style.display = "block";
		}
	})
}