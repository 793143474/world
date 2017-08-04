<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="/beian/Public/admin/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/beian/Public/admin/js/jquery.js"></script>
<!--<script src="/beian/Public/admin/js/verificationNumbers.js"></script>
<script src="/beian/Public/admin/js/Particleground.js"></script>-->
<script src="/beian/Public/jquery/jquery-3.2.0.min.js"></script>

</head>
<body>
<!--<form id="RegForm"  name="register" method="post">-->
    <dl class="admin_login">
         <dt>
              <strong>后台管理系统</strong>
              <em></em>
         </dt>
         <dd class="user_icon">
              <input type="text" id="account"  placeholder="账号" class="login_txtbx"/>
         </dd>
         <dd class="pwd_icon">
              <input type="password" id="password"  placeholder="密码" class="login_txtbx"/>
         </dd>
         <dd class="val_icon">
              <div class="checkcode">
                    <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
                    <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
              </div>
              <input type="submit" value="验证码核验" class="ver_btn" onClick="validate();">
         </dd>
         <dd>
              <input type="submit" value="立即登陆" class="submit_btn" id="submit_bt"/>
            <!--  <input type="submit" value="立即注册" class="submit_btn" id="submit_btn"/>-->
         </dd>
         <dd>
              <p></p>
              <p></p>
         </dd>
    </dl>
    <!-- </form>-->
</body>
<script>
     $(document).ready(function() {
          $("#submit_btn").click(function(){
               var name=$('#account');
               var pwd=$('#password');
               $.ajax({
                    type: 'post',
                    url:"<?php echo U('Admin/Login/register');?>",
                    data: {name:name.val(),password:pwd.val()},
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
               var name=$('#account');
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