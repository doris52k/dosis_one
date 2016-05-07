$(document).ready(function(){
	var topMenuNum = 0
	function topMenuSwap(){
		if (topMenuNum == 0) {
			$(".blogTitle").css("visibility", "hidden");
			$(".singleTitle").css("visibility", "hidden");
			$(".backbtn").css("visibility", "hidden");
			$(".top_menu").css("display", "block");
			$("#menubtn_id").attr('class', 'categoryButton_close')
			topMenuNum = 1;
		}else{
			$(".blogTitle").css("visibility", "visible");
			$(".singleTitle").css("visibility", "visible");
			$(".backbtn").css("visibility", "visible");
			$(".top_menu").css("display", "none");
			$("#menubtn_id").attr('class', 'categoryButton')
			topMenuNum = 0;
		};
	};
	$("#menubtn_id").click(function(){
		topMenuSwap();
	});
});
$(window).load(function(){
	 $('.categoryButton_bar_one').css("transition-duration", "0.3s")
	 $('.categoryButton_bar_two').css("transition-duration", "0.3s")
})
