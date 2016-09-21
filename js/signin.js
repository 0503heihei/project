$("#qrcode-trigger").on("click",function(){
	$(".login-content").css("display","none");
	$(".ercode_area").css("display","block");
})
$("#qrcode-trigger1").on("click",function(){
	$(".login-content").css("display","block");
	$(".ercode_area").css("display","none");
})

function signIn(){
	window.location.assign("signin-api.php");
}
$(".namestyle").on("mouseover",function () {
	$(".signout").slideDown();
})
$(".signout").on("click",function () {
	$(this).slideUp();
})
function signOut() {
	window.location.assign("signin-api.php");
}