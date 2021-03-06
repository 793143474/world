<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>华地收藏网——登录</title>
    <link rel="stylesheet" href="/beian/Public/home/css/cang_puc.css" />
    <!--公共css -->
    <link rel="stylesheet" href="/beian/Public/home/css/logion.css" />
    <!--页面css -->
</head>

<body>
    <div class="cang_top">
        <div class="cang_logo">
            <a href="http://www.hdcac.com">华地收藏网</a>
        </div>
    </div>
    <!--top—over-->
    <div class="box">
        <div class="logion">
                <div class="logion_tit">
                    <span>会员登录</span>
                    <p>还没有会员账号？<a href="register.html">免费注册</a></p>
                </div>
                <div class="Prompt">
                    <div class="Prompt_box">
                        <span class="icon"></span>
                        <p>您输入的账户或密码有误！</p>
                    </div>
                </div>
                <div class="user_input">
                    <span class="icon"></span>
                    <label>账号</label>
                    <input placeholder="用户名或已验证手机号" type="text" id="nickname">
                </div>
                <div class="key_input">
                    <span class="icon"></span>
                    <label>密码</label>
                    <input type="password" id="password">
                </div>
                <div class="remember">
                    <a href="<?php echo U('forgetr/forgetr_one');?>">忘记密码？</a>
                    <p>
                        <label>记住我</label>
                        <input type="checkbox">
                    </p>
                </div>
                <button class="submit" type="submit" id="submit_btn">登录</button>
            <div class="logion_more">
                <span>其他登录方式：</span>
                <a href="#" class="qq"></a>
                <a href="#" class="weixin"></a>
                <a href="#" class="weibo"></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_box">
            <p class="bottom_nav">
                <a href="#">网站首页  </a>
                <span>|</span>
                <a href="#">关于我们  </a>
                <span>|</span>
                <a href="#">联系我们  </a>
                <span>|</span>
                <a href="#">加入我们  </a>
                <span>|</span>
                <a href="#">版权说明  </a>
                <span>|</span>
                <a href="#">免责说明  </a>
            </p>
            <p>华地收藏 www.hdcac.com 丨 Copyright Reserved 丨 2015-2017 华地文化艺术品中心版权所有 丨 电信与信息服务业务经营许可证</p>
            <p>24小时服务热线：4008-207-108 丨 公司名称：华地艺术品（上海）有限公司 丨 沪ICP备16022115号</p>
        </div>
    </div>
    <!--footer_over-->
    <div class="xuanfu">
    </div>
</body>
<script type="text/javascript" src="/beian/Public/home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/beian/Public/home/js/jquery.min.js"></script>
<script type="text/javascript" src="/beian/Public/home/js/index.js"></script>
<script src="/beian/Public/home/layer/layer.js"></script>
<script src="/beian/Public/home/js/logion.js"></script>
<script>
    $(document).ready(function() {
        $("#submit_btn").click(function(){
            var nickname=$('#nickname');
            var password=$('#password');
            $.ajax({
                type: 'post',
                url:"<?php echo U('Home/Login/dologin');?>",
                data: {nickname:nickname.val(),password:password.val()},
                dataType: "json",
                success: function(data){
                    if(data == 1){
                        window.location.href = "<?php echo U('Home/Index/index');?>";
                    }else{
                        alert(data);
                    }
                },
                error:function(jqXHR, textStatus, errorThrown){
                    alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);
                }
            });
        });
    });
</script>
</html>