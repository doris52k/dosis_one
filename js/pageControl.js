$(document).ready(function(){
	var topMenuNum = 0
	function topMenuSwap(){
		if (topMenuNum == 0) {
			$(".blogTitle").css("visibility", "hidden");
			$(".singleTitle").css("visibility", "hidden");
			$(".menubtn").css("background-position", "-26px 0");
			$(".top_menu").css("display", "block");
			topMenuNum = 1;
		}else{
			$(".blogTitle").css("visibility", "visible");
			$(".singleTitle").css("visibility", "visible");
			$(".menubtn").css("background-position", "0 0");
			$(".top_menu").css("display", "none");
			topMenuNum = 0;
		};
	};
	$(".menubtn").click(function(){
		topMenuSwap();
	})
});