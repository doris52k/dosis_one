$(document).ready(function(){
	var topMenuNum = 0
	function topMenuSwap(){
		if (topMenuNum == 0) {
			$(".blogTitle").css("visibility", "hidden");
			$(".singleTitle").css("visibility", "hidden");
			$(".top_menu").css("display", "block");
			$("#menubtn_id").attr('class', 'menubtn_close')
			topMenuNum = 1;
		}else{
			$(".blogTitle").css("visibility", "visible");
			$(".singleTitle").css("visibility", "visible");
			$(".top_menu").css("display", "none");
			$("#menubtn_id").attr('class', 'menubtn')
			topMenuNum = 0;
		};
	};
	$("#menubtn_id").click(function(){
		topMenuSwap();
	});
});
