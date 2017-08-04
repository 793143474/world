function Login() {
    var username = $.trim($(".user_input input").val()); //获取到用户手机号
    var pwd = $.trim($(".key_input input").val()); //获取到验证码
    var reg = /^1[3|4|5|7|8][0-9]{9}$/; //验证规则
    var flag;
    flag = reg.test(username);
    if (username == "" || pwd == "") {
        $(".Prompt_box").show();
        $(".Prompt_box p").html("账号密码不能为空！")
    } else {
        if (!flag) {
            $(".Prompt_box").show();
            $(".Prompt_box p").html("请输入正确手机号！")
        } else {
            $(".Prompt_box").show();
            $(".Prompt_box p").html("账号或密码输入有误！")
        }
    }
}
