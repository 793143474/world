$(".reg_item input").blur(function(){
	var tr = $.trim($(this).val())
	if(tr == ""){
		$(this).parent().next(".item_bottom").children(".no").show();
		$(this).parent().next(".item_bottom").children(".no").children("p").html("该选项不能为空！");
	}
})
$(function  () {
	//获取短信验证码
	var validCode=true;
	$(".msgs").click (function  () {
		var time=60;
		var code=$(this);
		if (validCode) {
			validCode=false;
		var t=setInterval(function  () {
			time--;
			code.html(time+"秒");
			if (time==0) {
				clearInterval(t);
			code.html("重新获取");
				validCode=true;
			}
		},1000)
		}
	});

})