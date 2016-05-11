$(document).ready(function(){
	var topMenuNum = 0
	function topMenuSwap(){
		if (topMenuNum == 0) {
			$(".singleTitle p").css("visibility", "hidden");
			$(".top_menu").css("display", "block");
			$("#menubtn_id").attr('class', 'categoryButton_close')
			topMenuNum = 1;
		}else{
			$(".singleTitle p").css("visibility", "visible");
			$(".top_menu").css("display", "none");
			$("#menubtn_id").attr('class', 'categoryButton')
			topMenuNum = 0;
		};
	};
	$("#menubtn_id").click(function(){
		topMenuSwap();
	});
});
