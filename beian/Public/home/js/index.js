/*banner*/
$(function() {
		var win = $(".win");
		var links = $(".title a");
		var float = $(".float");
		var divs = $(".box div");
		var num1 = 0; //ǰݵ±
		var num2 = 0;
		run();
		var interval;

		function run() {
			interval = setInterval(chat, "4000");
		}

		function chat() {
			divs.finish();
			float.stop(true);
			var temp = num1;
			num1++;
			if (num1 == 5) {
				num1 = 0;
			}
			divs.eq(num1).css("left", -900).animate({
				left: 0
			});
			divs.eq(temp).animate({
				left: 900
			});
			links.css("color", "#009797");
			float.animate({
				left: links.eq(num1).position().left
			})
			links.eq(num1).css("color", "#fff");
		}

		win.hover(function() {
			$(".leftB,.rightB").css("display", "block");
		}, function() {
			$(".leftB,.rightB").css("display", "none");
		});
		$(".leftB").click(function() {
			divs.finish();
			float.stop(true);
			var temp = num1;
			num1--;
			if (num1 == -1) {
				num1 = 4;
			}
			divs.eq(num1).css("left", 700).animate({
				left: 0
			});
			divs.eq(temp).animate({
				left: -700
			});
			links.css("color", "#009797");
			float.animate({
				left: links.eq(num1).position().left
			})
			links.eq(num1).css("color", "#fff");
		});
		$(".rightB").click(function() {
			divs.finish();
			float.stop(true);
			var temp = num1;
			num1++;
			if (num1 == 5) {
				num1 = 0;
			}
			divs.eq(num1).css("left", -700).animate({
				left: 0
			});
			divs.eq(temp).animate({
				left: 700
			});
			links.css("color", "#009797");
			float.animate({
				left: links.eq(num1).position().left
			})
			links.eq(num1).css("color", "#fff");
		});
		links.hover(function() {
			//
			divs.finish();
			float.stop(true);
			links.css("color", "#009797");
			var that = $(this);
			var lefts = $(this).position().left;
			float.animate({
					left: lefts
				}, function() {
					that.css("color", "#fff");
				})
				//
				//ݱ仯
			var index = $(this).index(".title a");
			num2 = index;
			if (num1 == num2) {
				return;
			} else if (num1 < num2) {
				divs.eq(num2).css("left", 700).animate({
					left: 0
				});
				divs.eq(num1).animate({
					left: -700
				});
			} else if (num1 > num2) {
				divs.eq(num2).css("left", -700).animate({
					left: 0
				});
				divs.eq(num1).animate({
					left: 700
				});
			}
			num1 = num2;
			num2 = "";
		}, function() {

		})

		//从左侧显示遮罩效果 开始
		$(".con-four").hover(function() {
				$(this).find(".txt-four").stop().animate({
					"left": 0
				});
			}, function() {
				$(this).find(".txt-four").stop().animate({
					"left": -297
				});
			})
			//从左侧显示遮罩效果 结束
			//tabq切换

	})
	/*banner-over*/
	/*分类列表*/
function autoScroll(obj) {
	$(obj).find("ul").animate({
		marginTop: "-36px"
	}, 500, function() {
		$(this).css({
			marginTop: "0px"
		}).find("li:first").appendTo(this);
	})
}
$(function() {
	setInterval('autoScroll(".shoplist")', 1000);
})
$(".list_tab li").click(function() {
		$(".list_tab li").removeClass("active");
		$(this).addClass("active");
		var s = $(this).index();
		$(".tabone").hide();
		$(".tabone").eq(s).show();
	})
	/*轮播新闻*/
$(function() {
	var win = $(".winx");
	var links = $(".titlex a");
	var float = $(".floatx");
	var divs = $(".boxx div");
	var num1 = 0; //ǰݵ±
	var num2 = 0;
	run();
	var interval;

	function run() {
		interval = setInterval(chat, "4000");
	}

	function chat() {
		divs.finish();
		float.stop(true);
		var temp = num1;
		num1++;
		if (num1 == 5) {
			num1 = 0;
		}
		divs.eq(num1).css("left", -360).animate({
			left: 0
		});
		divs.eq(temp).animate({
			left: 360
		});
		links.css("color", "#009797");
		float.animate({
			left: links.eq(num1).position().left
		})
		links.eq(num1).css("color", "#fff");



	}

	win.hover(function() {
		$(".leftBx,.rightBx").css("display", "block");
	}, function() {
		$(".leftBx,.rightBx").css("display", "none");
	});
	$(".leftBx").click(function() {
		divs.finish();
		float.stop(true);
		var temp = num1;
		num1--;
		if (num1 == -1) {
			num1 = 4;
		}
		divs.eq(num1).css("left", 360).animate({
			left: 0
		});
		divs.eq(temp).animate({
			left: -360
		});
		links.css("color", "#009797");
		float.animate({
			left: links.eq(num1).position().left
		})
		links.eq(num1).css("color", "#fff");
	});
	$(".rightBx").click(function() {
		divs.finish();
		float.stop(true);
		var temp = num1;
		num1++;
		if (num1 == 5) {
			num1 = 0;
		}
		divs.eq(num1).css("left", -360).animate({
			left: 0
		});
		divs.eq(temp).animate({
			left: 360
		});
		links.css("color", "#009797");
		float.animate({
			left: links.eq(num1).position().left
		})
		links.eq(num1).css("color", "#fff");
	});
	links.hover(function() {
		//
		divs.finish();
		float.stop(true);
		links.css("color", "#009797");
		var that = $(this);
		var lefts = $(this).position().left;
		float.animate({
				left: lefts
			}, function() {
				that.css("color", "#fff");
			})
			//
			//ݱ仯
		var index = $(this).index(".title a");
		num2 = index;
		if (num1 == num2) {
			return;
		} else if (num1 < num2) {
			divs.eq(num2).css("left", 360).animate({
				left: 0
			});
			divs.eq(num1).animate({
				left: -360
			});
		} else if (num1 > num2) {
			divs.eq(num2).css("left", -360).animate({
				left: 0
			});
			divs.eq(num1).animate({
				left: 360
			});
		}
		num1 = num2;
		num2 = "";
	}, function() {

	})
})