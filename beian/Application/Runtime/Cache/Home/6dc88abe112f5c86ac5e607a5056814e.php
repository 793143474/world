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
				<p><a href="register.html">注册</a><a href="logion.html">登录</a></p>
			</div>
		</div>
		<!--top—over-->
		<div class="box">
			<div class="process_box">
				<ul>
					<li>
						<span>1</span>
						<p>输入账号</p>
					</li>
					<li class="active">
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
				<div class="reg_item">
					<div class="item_top">
						<span>手机号码</span>
						<input class="long" placeholder="请输入你的手机号">
						<em class="yes"></em>
					</div>
					<div class="item_bottom">
						<div class="no">
							<span class="icon"></span>
							<p>手机号输入有误</p>
						</div>
					</div>
				</div>
				<form>
					<div class="reg_item">

						<div class="item_top">
							<span>手机验证码</span>
							<input  class="short">
							<div class="itme_last">
								<span class="msgs">获取验证码</span>
							</div>
						</div>
						<div class="item_bottom">
							<div class="no">
								<span class="icon"></span>
								<p>手机验证码输入有误</p>
							</div>
						</div>
					</div>
					<div class="register_buttom">
						<button type="submit">下一步</button>
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