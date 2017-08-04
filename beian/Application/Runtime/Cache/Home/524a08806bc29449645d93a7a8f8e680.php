<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>华地收藏网——登录</title>
    <link rel="stylesheet" href="/beian/Public/home/css/cang_puc.css"/>
    <link rel="stylesheet" href="/beian/Public/home/css/register.css"/>
</head>
<body>
<div class="cang_top">
    <div class="cang_logo">
        <a href="http://www.hdcac.com">华地收藏网</a>
    </div>
    <div class="register_top">
        <span>欢迎注册</span>
        <p>已有账号？请<a href="<?php echo U('login/login');?>">登录</a></p>
    </div>
</div>
<!--top—over-->
<div class="box">
    <div class="register">
            <div class="reg_item">
                <div class="item_top">
                    <span>用 户 名</span>
                    <input class="long userName" name="nickname" id="nickname" placeholder="请输入你的用户名">
                    <em class="yes"></em>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="reg_item">
                <div class="item_top">
                    <span>设置密码</span>
                    <input class="long pwd01" type="password" name="password" id="password" placeholder="请输入你的密码">
                    <em class="yes"></em>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="reg_item">
                <div class="item_top">
                    <span>确认密码</span>
                    <input  type="password" class="long pwd02" name="pwd" id="pwd" placeholder="请再次输入你的密码">
                    <em class="yes"></em>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="reg_item">
                <div class="item_top">
                    <span>手机号码</span>
                    <input class="long phone" name="mobile" id="mobile" placeholder="请输入你的手机号">
                    <em class="yes"></em>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="reg_item">
                <div class="item_top">
                    <span>手机验证码</span>
                    <input class="short" name="s_yanzheng">
                    <div class="itme_last">
                        <span class="msgs">获取验证码</span>
                    </div>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p>手机验证码输入有误或已失效</p>
                    </div>
                </div>
            </div>
            <div class="reg_item">
                <div class="item_top">
                    <span>验 证 码</span>
                    <input class="short" name="yanzheng" id="yzm">
                    <div class="itme_last">
                        <img onclick="this.src=this.src+'?'+Math.random()" src="<?php echo U('Home/Login/selfverify');?> ">
                    </div>
                </div>
                <div class="item_bottom">
                    <div class="no">
                        <span class="icon"></span>
                        <p>验证码输入错误</p>
                    </div>
                </div>
            </div>
            <div class="reg_item">
                <input type="checkbox" class="tiap" name="xieyi" value="1" onClick="test()">
                <p class="riape">阅读 并同意<a onClick="Tiaokuang()">《华地艺术品用户注册协议》</a></p>
            </div>
            <div class="register_buttom">
                <button type="submit" id="submit_btn" disabled="disabled">注册账号</button>
            </div>
    </div>
</div>
<div class="footer">
    <div class="footer_box">
        <p class="bottom_nav">
            <a href="#">网站首页 </a>
            <span>|</span>
            <a href="#">关于我们 </a>
            <span>|</span>
            <a href="#">联系我们 </a>
            <span>|</span>
            <a href="#">加入我们 </a>
            <span>|</span>
            <a href="#">版权说明 </a>
            <span>|</span>
            <a href="#">免责说明 </a>
        </p>
        <p>华地收藏 www.hdcac.com 丨 Copyright Reserved 丨 2015-2017 华地文化艺术品中心版权所有 丨 电信与信息服务业务经营许可证</p>
        <p>24小时服务热线：4008-207-108 丨 公司名称：华地艺术品（上海）有限公司 丨 沪ICP备16022115号</p>
    </div>
</div>
<!--footer_over-->
<div class="xuanfu">

</div>
<div id="tiaokuang" style="display: none;">
    <div class="fuwu">
        <h4>华地用户注册协议</h4>
        <p>本协议是您与华地网站（简称;本站;）所有者（以下简称为;华地;）之间就华地网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议，您点击;同意并继续;按钮后，本协议即构成对双方有约束力的法律文件。</p>
        <h4>第1条 本站服务条款的确认和接纳</h4>
        <p>
            1.1本站的各项电子服务的所有权和运作权归华地所有。用户同意所有注册协议条款并完成注册程序，才能成为本站的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。</p>
        <p>1.2用户点击同意本协议的，即视为用户确认自己具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。</p>
        <p>1.3如果您在18周岁以下，您只能在父母或监护人的监护参与下才能使用本站。</p>
        <p>1.4华地保留在中华人民共和国大陆地区法施行之法律允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。</p>
        <h4>第2条 本站服务</h4>
        <p>2.1华地通过互联网依法为用户提供互联网信息等服务，用户在完全同意本协议及本站规定的情况下，方有权使用本站的相关服务。</p>
        <p>2.2用户必须自行准备如下设备和承担如下开支：（1）上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他必备的上网装置；（2）上网开支，包括并不限于网络接入费、上网设备租用费、手机流量费等。</p>
        <h4>第3条 用户信息</h4>
        <p>
            3.1用户应自行诚信向本站提供注册资料，用户同意其提供的注册资料真实、准确、完整、合法有效，用户注册资料如有变动的，应及时更新其注册资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，并且华地保留终止用户使用华地
            各项服务的权利。</p>
        <p>3.2用户在本站进行浏览、下单购物等活动时，涉及用户真实姓名/名称、通信地址、联系电话、电子邮箱等隐私信息的，本站将予以严格保密，除非得到用户的授权或法律另有规定，本站不会向外界披露用户隐私信息。
        </p>
        <p>3.3用户注册成功后，将产生用户名和密码等账户信息，您可以根据本站规定改变您的密码。用户应谨慎合理的保存、使用其用户名和密码。用户若发现任何非法使用用户账号或存在安全漏洞的情况，请立即通知本站并向公安机关报案。
        </p>
        <button class="layui-layer-close tongyi">同意协议</button>
    </div>
</div>
</body>
<script type="text/javascript" src="/beian/Public/home/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/beian/Public/home/js/jquery.min.js"></script>
<script type="text/javascript" src="/beian/Public/home/layer/layer.js"></script>
<script src="/beian/Public/home/js/register.js"></script>
<script>
    $(document).ready(function() {
        $("#submit_btn").click(function(){
            var nickname=$('#nickname');
            var password=$('#password');
            var pwd=$('#pwd');
            var mobile=$('#mobile');
            var yzm = $('#yzm');
            $.ajax({
                type: 'post',
                url:"<?php echo U('Home/Login/doregister');?>",
                data: {nickname:nickname.val(),password:password.val(),pwd:pwd.val(),mobile:mobile.val(),yzm:yzm.val()},
                dataType: "json",
                success: function(data){
                    alert(data);
                },
                error:function(jqXHR, textStatus, errorThrown){
                    alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);
                }
            });
        });

        $("#submit_bt").click(function(){
            var name=$('#nickname');
            var pwd=$('#password');
            $.ajax({
                type: 'post',
                url:"<?php echo U('Admin/Login/dologin');?>",
                data: {name:name.val(),password:pwd.val()},
                dataType: "json",
                success: function(data){
                    if(data == 1){
                        window.location.href = "<?php echo U('Admin/Index/index');?>";
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