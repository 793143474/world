<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>华地收藏网——登录</title>
		<link rel="stylesheet" href="/beian/Public/home/css/cang_puc.css" />
		<!--公共css -->
		<link rel="stylesheet" href="/beian/Public/home/css/forgetr.css" />
		<!--页面css -->
	</head>
	<body>
	<div class="cang_top">
		<div  class="cang_logo">
			<a href="http://www.hdcac.com">华地收藏网</a>
		</div>
		<div class="process_top">
			<span>找回密码</span>
			<p><a href="<?php echo U('login/register');?>">注册</a><a href="<?php echo U('login/login');?>">登录</a></p>
		</div>
	</div>
		<!--top—over-->
		<div class="box">
			<div class="process_box">
				<ul>
					<li class="active">
						<span>1</span>
						<p>输入账号</p>
					</li>
					<li>
						<span>2</span>
						<p>验证身份</p>
					</li>
					<li>
						<span>3</span>
						<p>重置密码</p>
					</li>
					<li>
						<span>4</span>
						<p>重置成功</p>
					</li>
				</ul>
			</div>
			<div class="process">
				<form action="forgetr_one" method="post" enctype="multipart/form-data">
					<div class="reg_item">
						<div class="item_top">
							<span>用 户 名</span>
							<input class="long" name="nickname" id="nickname" placeholder="请输入你的用户名">
							<em class="yes"></em>
						</div>
						<div class="item_bottom">
							<div class="no">
								<span class="icon"></span>
								<p>用户名不存在！</p>
							</div>
						</div>
					</div>

					<div class="reg_item">
						<div class="item_top">
							<span>验 证 码</span>
							<input class="short" name="yzm" id="yzm">
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
					<div class="register_buttom">
						<button type="submit" id="submit_btn">下一步</button>
					</div>
				</form>
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
				<p>华地收藏  www.hdcac.com 丨 Copyright Reserved 丨 2015-2017 华地文化艺术品中心版权所有 丨 电信与信息服务业务经营许可证</p>
				<p>24小时服务热线：4008-207-108 丨 公司名称：华地艺术品（上海）有限公司 丨 沪ICP备16022115号</p>
			</div>
		</div>
		<!--footer_over-->
		<div class="xuanfu">
			
		</div>
	</body>
	<script type="text/javascript" src="/beian/Public/home/js/jquery-1.8.3.min.js" ></script>
	<script type="text/javascript" src="/beian/Public/home/js/jquery.min.js" ></script>
    <script src="/beian/Public/home/js/forgetr.js"></script>
</html>