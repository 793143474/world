// $(".reg_item input").blur(function() {
// 	var tr = $.trim($(this).val())
// 	if (tr == "") {
// 		$(this).parent().next(".item_bottom").children(".no").show();
// 		$(this).parent().next(".item_bottom").children(".no").children("p").html("该选项不能为空！");
// 	}
// });

$(function() {
	//获取短信验证码
	var validCode = true;
	$(".msgs").click(function() {
		var time = 60;
		var code = $(this);
		if (validCode) {
			validCode = false;
			code.addClass("msgs1");
			var t = setInterval(function() {
				time--;
				code.html(time + "秒");
				if (time == 0) {
					clearInterval(t);
					code.html("重新获取");
					validCode = true;
					code.removeClass("msgs1");
				}
			}, 1000)
		}
	});
})

function Tiaokuang() {
	layer.open({
		type: 1, //表示弹出是一个页面层
		title: "华地用户注册协议",
		area: ["730px", "630px"], //宽度和高度
		content: $("#tiaokuang") //内容所对应的jq对象
	});
}

$(".tongyi").click(function() {
	$(".tiap").prop('checked', true);
	test();
});

function test() {
	if ($(".tiap").is(":checked")) {
		$(".register_buttom button").attr('disabled', false);
	} else {
		$(".register_buttom button").attr('disabled', true);
	}
}


//用户名方法
function cUsername() {
	var myname =$.trim($(".userName").val());
	var myDivname = document.getElementById("uname");
	if (myname == "") {
		$(".userName").parent().next(".item_bottom").children(".no").show();
		$(".userName").parent().next(".item_bottom").children(".no").children("p").html("用户名不能为空!");
		return false;
	}
	if(myname.length < 6 || myname.length > 18){
		$(".userName").parent().next(".item_bottom").children(".no").show();
		$(".userName").parent().next(".item_bottom").children(".no").children("p").html("用户名长度应在6~18个字符之间!");
		return false;
	}
	for (var i = 0; i < myname.length; i++) {
		var text = myname.charAt(i);
		if (!(text <= 9 && text >= 0) && !(text >= 'a' && text <= 'z') && !(text >= 'A' && text <= 'Z') && text != "_") {
			$(".userName").parent().next(".item_bottom").children(".no").show();
			$(".userName").parent().next(".item_bottom").children(".no").children("p").html("用户名只能是数字、字母、下划线组成！");
			break;
		}
	}
	if (i >= myname.length) {
		$(".userName").siblings('.yes').show();
		return true;
	}
}

$(".userName").focus(function() {
	$(".userName").parent().next(".item_bottom").children(".no").hide();
	$(".userName").siblings('.yes').hide();
});

$(".userName").blur(function() {
	cUsername();
});

// 手机号码方法
function cPhone() {
	var myreg = /^1[3|4|5|7|8][0-9]\d{8}$/;;
	if (!myreg.test($(".phone").val())) {
		$(".phone").parent().next(".item_bottom").children(".no").show();
		$(".phone").parent().next(".item_bottom").children(".no").children("p").html("请输入有效的手机号码！");
	} else {
		$(".phone").siblings('.yes').show();
	}
}

$(".phone").focus(function(event) {
	$(".phone").parent().next(".item_bottom").children(".no").hide();
	$(".phone").siblings('.yes').hide();
});

$(".phone").blur(function(event) {
	cPhone();
});

// 密码方法
function cPassword(){
	var pwd01 =$.trim($(".pwd01").val());
	var mypsreg =/^[a-zA-Z0-9]{6,20}$/;

	if (!mypsreg.test(pwd01)) {
		$(".pwd01").parent().next(".item_bottom").children(".no").show();
		$(".pwd01").parent().next(".item_bottom").children(".no").children("p").html("使用字母、数字两种及以上的组合，6-20个字符");
	}else{
		$(".pwd01").siblings('.yes').show();
	}
}

$(".pwd01").focus(function(event) {
	$(".pwd01").parent().next(".item_bottom").children(".no").hide();
	$(".pwd01").siblings('.yes').hide();
});

$(".pwd01").blur(function(event) {
	cPassword();
});


// 确认密码方法
function cPswdb(){
	var pwd01 =$.trim($(".pwd01").val());
	var pwd02 =$.trim($(".pwd02").val());
	if(pwd01 != pwd02){
		$(".pwd02").parent().next(".item_bottom").children(".no").show();
		$(".pwd02").parent().next(".item_bottom").children(".no").children("p").html("两次密码不一致！");
	}else if(pwd01 == '' || pwd02 == ''){
		$(".pwd02").parent().next(".item_bottom").children(".no").show();
		$(".pwd02").parent().next(".item_bottom").children(".no").children("p").html("密码不能为空！");
	}else{
		$(".pwd02").siblings('.yes').show();
	}
}

$(".pwd02").focus(function(event) {
	$(".pwd02").parent().next(".item_bottom").children(".no").hide();
	$(".pwd02").siblings('.yes').hide();
});

$(".pwd02").blur(function(event) {
	cPswdb();
});

